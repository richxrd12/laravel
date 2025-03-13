@extends('layouts.app')

@section('title', 'Home')

@section('header')

    @auth
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth

@endsection

@section('main')

    <a href="/add">
        Add new Blog
    </a>

    @php
        use App\Models\Blog;
        
        $blogs = Blog::all();
        $userBlogs = auth()->user()->blogs;  

    @endphp
    
    @foreach ($blogs as $blog)
        <x-card :title="$blog->title" :text="$blog->text" :id="$blog->id">
            @if ($userBlogs->contains($blog))
                <a href="/blog/{{ $blog->id }}/edit">Edit post</a>
            @endif
        </x-card>
    @endforeach

@endsection