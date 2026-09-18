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
        $request->merge([
        'completed' => $request->boolean('completed'),
        ]);

        $validate = $request->validate([
            'subject' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'studied_at' => 'required|date',
            'completed' => 'boolean',
        ]);

        StudySession::create($validate);

        session()->flash('success', 'Data berhasil disimpan!');

        return redirect()->route('study-sessions.index');
    }

    public function edit( StudySession $studySession) 
    {
        return view('study-sessions.edit', [
            'studySession' => $studySession
        ]);
    }

    public function update( Request $request, StudySession $studySession) 
    {
        $request->merge([ 
            'completed' => $request->boolean('completed')
        ]);
        
        $validate = $request->validate([
            'subject' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'studied_at' => 'required|date',
            'completed' => 'boolean',
        ]);

        $studySession->update($validate);

       return redirect()->route('study-sessions.index');
    }

    public function destroy(StudySession $studySession)
    {
        $studySession->delete();

        return redirect()->route('study-sessions.index');
    }
}
