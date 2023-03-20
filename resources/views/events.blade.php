<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('app.css')}}">
</head>

<div class="content">
    <h1>Events</h1><br>
    <table>
        <tr>
            <th>Titel</th>
            <th>Datum</th>
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
            </tr>
        @endforeach
    </table>

</div>
