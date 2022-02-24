@extends('layouts.app')
@section('title')
    Elia | Personal Blog
@endsection

@section('content')
    <form id='create_post_form' action='' method='post' enctype='multipart/form-data'>
        @csrf

        <!-- Title -->
        <div class='form-group mx-5'>
            <label for='input_title'><mark class='highlight-color-text blue-bg'>title</mark></label>
            <input type='text' class='form-control w-25 mx-3' name='title' id='input_title' placeholder='title' minlength='5'>
        </div>

        <!-- Text Body -->
        <div class='form-group mx-5 mt-4'>
            <label for='input_text'><mark class='highlight-color-text cyan-bg'>text</mark></label>
            <textarea class='form-control mx-3' name='text' id='input_text' placeholder='write something!' minlength='10' maxlength='2400' rows='20' wrap='soft'></textarea>
        </div>

        <!-- Files -->
        <div class='form-group mx-5 mt-4'>
            <label for='input_files'><mark class='highlight-color-text green-bg'>attach</mark></label>
            <input class='form-control border-0 bg-transparent ml-3 pl-0' type='file' name='file' id='input_file'/>
        </div>

        <!-- Submit Button -->
        <div class='form-group mx-5 mt-5'>
            <input type='submit' class='btn btn-primary'>
        </div>
    </form>
@endsection
