@extends('layout')
@section('content')

    <form action="/new-event" method="post">
        @csrf
        <input type="text" name="title" placeholder="Titel">
        @error('title')
        <p>{{$message}}</p>
        @enderror
        <input type="text" name="date" placeholder="Datum">
        @error('date')
        <p>{{$message}}</p>
        @enderror
        <input type="text" name="description" placeholder="Beschreibung">
        @error('description')
        <p>{{$message}}</p>
        @enderror

        <input type="submit" name="submit" id="submit" value="Event erstellen">
    </form>

@endsection
