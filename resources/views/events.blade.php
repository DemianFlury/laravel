@extends('layout')
@section('content')

    @if(session()->has('success'))
        <div class="flash">
            {{session('success')}}
        </div>
    @endif

    <h1>Events</h1>
    <table>
        <tr>
            <th>Titel</th>
            <th>Datum</th>
            <th>Anzahl Teilnehmende</th>
        </tr>
        @foreach($events as $event)
            <tr>
                <td>
                    <a href="/event/{{$event->id}}">
                        {{$event->title}}
                    </a>
                </td>
                <td>
                    {{$event->date}}
                </td>
                <td>
                    {{$event->application->count()}}
                </td>
            </tr>
        @endforeach
    </table>

@endsection
