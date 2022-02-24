<?php

namespace App\Http\Controllers;

use App\Post;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * display the index page of the blog.
     *  - the index page retrieves on the 10 latest blog posts. All posts can be viewed in archive.
     * @return View
     */
    public function index(): View
    {
        $post = DB::table('post')->latest()->take(10)->get();
        return view('index')->with('posts', $post);
    }

    /**
     * show the form for creating a new post
     *
     * @return View
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * store a newly created post in storage.
     *  - the title and text of a post is stored within the database, under the table post
     *  - the image, if present, is stored storage/app/public/images
     *
     * @param Request $request
     * @return View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): View
    {
        // validate that title and text are filled
        try {
            $this->validate($request, [
                'title' => 'required',
                'text' => 'required'
            ]);
        } catch (ValidationException $exception) {
            print($exception);
        }

        // construct a new post
        $post = new Post();
        $post->fill([
            'title' => $request->get('title'),
            'text' => $request->get('text')
        ]);

        // check for file
        if ($request->hasFile('file')) {
            try {
                $this->validate($request, [
                    'file' => 'mimes:jpeg,jpg,bmp,png,gif'
                ]);

                $file_name = time().'_'.$request->file('file')->hashName();
                $file_path = $request->file('file')->storeAs('images', $file_name, 'public');

                $post->fill([
                    'file_name' => $file_name,
                    'file_path' => '/storage/'.$file_path]
                );
            } catch (ValidationException $exception) {
                print($exception);
            }
        }
        // no file, set file_name and file_path to 'null'
        else {
            $post->fill([
                'file_name' => 'null',
                'file_path' => 'null',
            ]);
        }

        $post->save();

        session()->flash('success', 'post created successfully');

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
