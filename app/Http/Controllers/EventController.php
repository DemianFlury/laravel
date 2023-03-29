<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function showEvent($id){
        $event = Event::findOrFail($id);


        return view('event',[
            'event' => $event
        ]);
    }

    public function listAllEvents(){
        $events = Event::all();

        return view('events', ['events' => $events]);
    }

    public function saveNewEvent(){
        $request = request();
        $request->validate([
           'title' => 'required',
           'date' => 'required',
           'description' => 'required'
        ]);

        $event = new Event();
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->date = $request->get('date');
        $event->save();
        return redirect('/events')->with('success', 'Event wurde erfolgreich erstellt!');
    }
}
