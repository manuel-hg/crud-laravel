<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function index() : View{
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create() : View{
        return view('note.create');
    }

    public function store(NoteRequest $request) : RedirectResponse{
        /*$note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();*/

        /*$request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required|max:255|min:3'
        ]);*/

        Note::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('note.index')->with('success', 'Note creada');
    }

    public function edit(Note $note) : View{
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note) : RedirectResponse{
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Nota actualizada');;
    }

    public function show(Note $note) : View{
        return view('note.show', compact('note'));
    }

    public function delete(Note $note) : RedirectResponse{
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note eliminada');
    }
}
