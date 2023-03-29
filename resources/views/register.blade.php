@extends('layout')
@section('content')

    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">

        <input type="submit" value="Register">
    </form>

@endsection
