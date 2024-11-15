<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use App\Models\Antenatal;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dailies = Daily::with('antenatal')->get();
        return view('dailies.index', compact('dailies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $antenatal = Antenatal::query()->orderBy('lname','desc')->get();
        return view('dailies.create', 
    ['antenatal'=> $antenatal]);
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
        Daily::create($data);
    
        return redirect()->route('dailies.index')
            ->with('success', 'Daily Register record save created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(daily $daily)
    {
          $dailies = Daily::with('antenatal')->get();  // dailies object is the one compact function loops thru to access properties through 'daily-slug-variable' name in the view
        return view('dailies.show', compact('daily'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(daily $daily)
    {
        return view('dailies.edit', compact('daily'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, daily $daily)
    {
        $request->validate([
            
        ]);

        $daily->update($request->all());

        return redirect()->route('dailies.index')
            ->with('success', 'Daily Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(daily $daily)
    {
        $daily->delete();

        return redirect()->route('dailies.index')
            ->with('success', 'Daily Record deleted successfully.');
    }
}
