@extends('layout')
@section('content')

    <form action="/login" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="E-Mail">
    <input type="password" name="password" id="password" placeholder="password">

    <input type="submit" value="Login">
    </form>
@endsection
