@extends('layouts.app')

@section('title', 'App Landing Page')

@section('header')

    @guest
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </nav>
    @endguest

    @auth
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
    

@endsection

@section('main')

    <h1>Esto es la landing page</h1>

@endsection


