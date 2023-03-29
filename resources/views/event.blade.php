@extends('layout')
@section('content')

    <h1>{{$event->title}}</h1>
    <p>{{$event->description}}</p>
    <p>Datum: {{$event->date}}</p>
    <form action="?" method="post">
        @csrf
        <input type="text" name="firstName" id="firstName" placeholder="First Name">
        @error('firstName')
        <p>{{$message}}</p>
        @enderror

        <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        @error('lastName')
        <p>{{$message}}</p>
        @enderror

        <input type="email" name="email" id="email" placeholder="Email address">
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <div class="radio-div">
            <input type="radio" value="yes" name="answer" id="yes" class="radio">
            <label for="yes">Ja, dabei</label>
        </div>
        <div class="radio-div">
            <input type="radio" value="no" name="answer" id="no" class="radio">
            <label for="no">Nein, kann nicht</label>
        </div>
        @error('answer')
        <p>{{$message}}</p>
        @enderror

        <button type="submit">Bestätigen</button>
    </form>

    <a href="/event/{{$event->id}}/applications">Anmeldungen ansehen</a>

@endsection
