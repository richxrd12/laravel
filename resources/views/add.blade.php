@extends('layouts.app')

@section('title', 'Add blog')

@section('header')

    <x-header></x-header>

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