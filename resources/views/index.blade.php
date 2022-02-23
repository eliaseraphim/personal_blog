@extends('layouts.app')
@section('title')
    Elia | Personal Blog
@endsection

@section('content')
    <ul class='list-group-flush list-unstyled'>
        @foreach($posts as $post)
            <li class='list-group-item m-0 p-0 border-0'>
                <h2>{{ $post->title }}</h2>
            </li>
            <li class='list-group-item m-0 p-0 border-0'>
                <p>{{ $post->text }}</p>
            </li>
            @if($post->file_name !== 'null')
                <li class='list-group-item m-0 p-0 border-0'>
                    <img src='{{ asset($post->file_path) }}' alt='{{ $post->file_name }}' class='w-25 h-25'/>
                    <p>{{ $post->file_path }}</p>
                </li>
            @endif
            <li class='list-group-item m-0 p-0 border-0'>
                <ul class='list-inline'>
                    <li class='list-inline-item border-right'>
                        <p>created at: {{ $post->created_at }}</p>
                    </li>
                    <li class='list-inline-item'>
                        <p>updated at: {{ $post->updated_at }}</p>
                    </li>
                </ul>
            </li>

        @endforeach
    </ul>
@endsection
