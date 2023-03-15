<h1>Events</h1><br>

<table>
    <tr>
        <td><h1>Titel</h1></td>
        <td><h1>Datum</h1></td>
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
