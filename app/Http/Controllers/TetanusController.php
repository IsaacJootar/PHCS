<?php

namespace App\Http\Controllers;

use App\Models\Tetanus;
use App\Models\Antenatal;
use Illuminate\Http\Request;

class TetanusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tetanus = Tetanus::with('antenatal')->get();
        return view('tetanus.index', compact('tetanus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $antenatal = Antenatal::query()->orderBy('lname','desc')->get();
        return view('tetanus.create', 
    ['antenatal'=> $antenatal]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // If needed, add validation here
        // $request->validate([
        //     'name' => 'required|string|unique:tetanus,name',
        //     // Add validation rules for other fields
        // ]);
    
        // Exclude _token from the request data
        $data = $request->except('_token');
    
        // Create a new tetanus  record
        Tetanus::create($data);
    
        return redirect()->route('tetanus.index')
            ->with('success', 'Tetanus record is saved successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(tetanus $tetanus)
    {
        $tetanuss = Tetanus::with('antenatal')->get();   
        return view('tetanus.show', compact('tetanus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tetanus $tetanus)
    {
        $tetanuss = Tetanus::with('antenatal')->get();  
        return view('tetanus.edit', compact('tetanus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tetanus $tetanus)
    {
        $request->validate([
            
        ]);

        $tetanus->update($request->all());

        return redirect()->route('tetanus.index')
            ->with('success', 'Tetanus  record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tetanus $tetanus)
    {
        $tetanus->delete();

        return redirect()->route('tetanus.index')
            ->with('success', 'Tetanus Record is deleted successfully.');
    }
}
