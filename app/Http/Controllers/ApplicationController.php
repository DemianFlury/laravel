<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function createNewApplication($id)
    {
        $request = request();
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'answer' => 'required'
        ]);

        $application = new \App\Models\Application();
        $application->answer = $request->get('answer');
        $application->first_name = $request->get('firstName');
        $application->last_name = $request->get('lastName');
        $application->email = $request->get('email');
        $application->session_id = session()->getId();
        $application->event_id = $id;
        $application->save();
        return redirect('/event/'. $id)->with('answer_sent', 'Antwort wurde gesendet!');
    }
    public function showApplications($id)
    {
        $applications = Event::findOrFail($id)->application;
        $rejected = Event::findOrFail($id)->application->count();
        // couldn't get it to work with the eloquent relationship

        return view('applications',[
            'applications' => $applications,
            'rejected' => $rejected
        ]);
    }
}
