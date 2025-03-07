@extends('layouts.app')

@section('title', 'Add blog')

@section('header')

    <a href="/home" class="btn btn-primary">Home</a>

    <form action="/logout" method="POST">
        <button type="submit">Logout</button>
    </form>

@endsection


@section('main')

    <form action="/blog/add" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    
        <label for="text">Text</label>
        <input type="textarea" name="text" id="text">
        
        <button type="submit">Add</button>
    </form>

@endsection