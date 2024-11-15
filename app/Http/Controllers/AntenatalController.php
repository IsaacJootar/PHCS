<?php

namespace App\Http\Controllers;

use App\Models\Antenatal;
use Illuminate\Http\Request;

class AntenatalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $antenatals = Antenatal::all();
        return view('antenatals.index', compact('antenatals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('antenatals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // If needed, add validation here
        // $request->validate([
        //     'name' => 'required|string|unique:dailies,name',
        //     // Add validation rules for other fields
        // ]);
    
        // Exclude _token from the request data
        $data = $request->except('_token');
    
        // Create a new daily record
        Antenatal::create($data);
    
        return redirect()->route('antenatals.index')
            ->with('success', 'antenatals record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Antenatal $antenatal)
    {
        //
        return view('antenatals.show', compact('antenatal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Antenatal $antenatal)
    {
        //
        return view('antenatals.edit', compact('antenatal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Antenatal $antenatal)
    {
        //
        $request->validate([
            
        ]);

        $antenatal->update($request->all());

        return redirect()->route('antenatals.index')
            ->with('success', 'antenatal Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Antenatal $antenatal)
    {
        //
        $antenatal->delete();

        return redirect()->route('antenatals.index')
            ->with('success', 'antenatal record deleted successfully.');
    }
}
