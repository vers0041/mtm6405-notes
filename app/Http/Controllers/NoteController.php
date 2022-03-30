<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index () {
        $title = "Notes";
        $search = request('search');

        if ($search) {
            $notes = Note::where('title', 'like', "%{$search}%")
                        ->orWhere('text', 'like', "%{$search}%")
                        ->get();
        } else {
            $notes = Note::all();
        }

        return view('notes', ['title' => $title, 'notes' => $notes]);
    }

    public function show ($id) {
        $note = Note::find($id);
        return view('note', $note);
    }

    public function create () {
        $title = 'New Note';
        return view('create', ['title' => $title]);
    }

    public function store () {
        $note = new Note();
        $note->title = request('title');
        $note->text = request('text');
        $note->save();

        return redirect("/notes/{$note->id}");
    }

    public function edit ($id) {
        $title = 'Edit Note';
        $note = Note::find($id);
        return view('edit', ['title' => $title, 'note' => $note]);
    }

    public function update ($id) {
        $note = Note::find($id);
        $note->title = request('title');
        $note->text = request('text');
        $note->save();

        return redirect("/notes/{$note->id}");
    }

    public function destroy ($id) {
        $note = Note::find($id);
        $note->delete();

        return redirect('/');
    }
}
