<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('app.css')}}">
</head>
<div class="content">

    <h1>Anmeldungen</h1>
    <ul>
        @foreach($applications as $application)
            <li>{{$application->first_name}} {{$application->last_name}}</li>
        @endforeach
    </ul>

    {{$rejected}} Abmeldungen
</div>
