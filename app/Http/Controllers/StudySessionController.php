<?php

namespace App\Http\Controllers;

use App\Models\StudySession;
use Illuminate\Http\Request;

class StudySessionController extends Controller
{
    public function index(Request $request) 
    {
        $query = StudySession::query();

        //filter completed
        if ($request->query('completed') === '1') {
            $query->where('completed', true); 

        } elseif ($request->query('completed') === '0') {
            $query->where('completed', false);

        }

        //filter subject
        if ($request->query('subject')) {
            $query->where('subject', $request->query('subject'));
        }
        
        //filter sorting time
        if ($request->query('sort') === 'latest' ) {
            $query->orderBy('studied_at', 'desc');
        } 
        elseif ($request->query('sort') === 'oldest' ) {
            $query->orderBy('studied_at', 'asc');
        }

        //filter by search
        if ($request->query('search')) {
            $query->where('subject','like', '%' . $request->query('search') . '%');
        }

        $sessions = $query->get();

        $subjects = StudySession::query()
        ->select('subject')
        ->distinct()
        ->get();


        return view('study-sessions.index', [
            'sessions' => $sessions,
            'subjects' => $subjects
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

        session()->flash('success', 'Data berhasil diperbarui!');

        return redirect()->route('study-sessions.index');
    }

    public function destroy(StudySession $studySession)
    {
        $studySession->delete();

        session()->flash('success', 'Data berhasil dihapus!');

        return redirect()->route('study-sessions.index');
    }

    }
