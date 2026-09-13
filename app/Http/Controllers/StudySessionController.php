<?php

namespace App\Http\Controllers;

use App\Models\StudySession;
use Illuminate\Http\Request;

class StudySessionController extends Controller
{
    public function index() 
    {
        $sessions = StudySession::all();

        return view('study-sessions.index', [
            'sessions' => $sessions
        ]);
    }

    public function create() 
    {
        return view('study-sessions.create');
    }

    public function store(Request $request) 
    {
        $validate = $request->validate([
            'subject' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'studied_at' => 'required|date',
        ]);

        StudySession::create($validate);

        return(redirect('/study-sessions'));
    }

    public function edit( StudySession $studySession) 
    {
        return view('study-sessions.edit', [
            'studySession' => $studySession
        ]);
    }

    public function update( Request $request, StudySession $studySession) 
    {
        $validate = $request->validate([
            'subject' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'studied_at' => 'required|date',
        ]);

        $studySession->update($validate);

        return redirect('/study-sessions');
    }

    public function destroy(StudySession $studySession)
    {
        $studySession->delete();

        return redirect('/study-sessions');
    }
}
