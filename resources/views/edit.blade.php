@extends('layouts.app')

@section('title', 'Edit')

@section('main')

    <form action="/blog/{{ $blog->id }}" method="POST">
        @method('PATCH')
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $blog->title }}">
    
        <label for="text">Text</label>
        <input type="textarea" name="text" id="text" value="{{ $blog->text }}">
        
        <button type="submit">Update</button>
    </form>

@endsection