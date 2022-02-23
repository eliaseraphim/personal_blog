<?php

namespace App\Http\Controllers;

use App\Post;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('index')->with('posts', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        session()->flash('success', 'post created succesfully');

        return view('create');
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
