@extends('header')
@section('content')

    <div class="content">

        <h1>Anmeldungen</h1>
        <ul>
            @foreach($applications as $application)
                <li>{{$application->first_name}} {{$application->last_name}}</li>
            @endforeach
        </ul>

        {{$rejected}} Abmeldungen
    </div>

@endsection
