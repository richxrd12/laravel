@extends('layouts.app')

@section('title', 'Login')

@section('header')

    <a href="/">Imagen empresa</a>

@endsection


@section('main')

    <form action="/register" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name...">

        <x-error error="name"/>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email...">

        <x-error error="email"/>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password...">

        <x-error error="password"/>

        <label for="password_confirmation">Repeat password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password...">

        <x-error error="password-confirmation"/>

        <button type="submit">Register</button>
    </form>

    <a href="/login">Already have an account? Login</a>

@endsection