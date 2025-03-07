@extends('layouts.app')

@section('title', 'Login')

@section('header')

    <a href="/">Imagen empresa</a>

@endsection


@section('main')

    <form action="/login" method="POST">
        
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email..." :value="old('email')">

        <x-error error="email"/>
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password...">

        <button type="submit">Login</button>
    </form>

    <a href="/register">Do not have an account? Register</a>

@endsection