@extends('layouts.app')
@section('title')
    Elia | Personal Blog
@endsection

@section('content')
    <form id='create_post_form'>
        <!-- Title -->
        <div class='form-group mx-5'>
            <label for='input_title'>title</label>
            <input type='text' class='form-control w-25' id='input_title' placeholder='title' minlength='5'>
        </div>

        <!-- Text Body -->
        <div class='form-group mx-5 mt-4'>
            <label for='input_text'>text</label>
            <textarea class='form-control' id='input_text' placeholder='write something!' minlength='10' maxlength='1200' rows='15' wrap='soft'></textarea>
        </div>

        <!-- Files -->
        <div class='form-group mx-5 mt-4'>
            <label for='input_files'>attach</label>
            <input class='form-control border-0' type='file' id='input_files' multiple/>
        </div>

        <!-- Submit Button -->
        <div class='form-group mx-5 mt-5'>
            <input type='submit' class='btn btn-primary float-right'>
        </div>
    </form>
@endsection
