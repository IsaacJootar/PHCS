<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Antenatal;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::with('antenatal')->get();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $antenatal = Antenatal::query()->orderBy('lname','desc')->get();
        return view('notes.create', 
    ['antenatal'=> $antenatal]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // If needed, add validation here
        // $request->validate([
        //     'name' => 'required|string|unique:note_natal,name',
        //     // Add validation rules for other fields
        // ]);
    
        // Exclude _token from the request data
        $data = $request->except('_token');
    
        // Create a new note  record
        Note::create($data);
    
        return redirect()->route('notes.index')
            ->with('success', 'Clinic note record saved successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(note $note)

    {
        $notes= Note::with('antenatal')->get();
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(note $note)
    {
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, note $note)
    {
        $request->validate([
            
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')
            ->with('success', 'Clinic Note record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')
            ->with('success', 'Clinic Note Record deleted successfully.');
    }
}
