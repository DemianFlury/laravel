<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create($id)
    {
        $request = request();

        $application = new \App\Models\Application();
        $application->answer = $request->get('answer');
        $application->first_name = $request->get('firstName');
        $application->last_name = $request->get('lastName');
        $application->email = $request->get('email');
        $application->session_id = session()->getId();
        $application->save();
        return redirect('/event');
    }
    public function list($id)
    {
        $applications = \App\Models\Application::where('answer', 'yes')->get();
        $rejected = \App\Models\Application::where('answer', 'yes')->count();

        return view('applications',[
            'applications' => $applications,
            'rejected' => $rejected
        ]);
    }
}
