<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Antenatal;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $deliveries = Delivery::with('antenatal')->orderBy('id', 'desc')->get();
        return view('deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $antenatal = Antenatal::query()->orderBy('lname','desc')->get();
        return view('deliveries.create', 
    ['antenatal'=> $antenatal]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // If needed, add validation here
        // $request->validate([
        //     'name' => 'required|string|unique:dailies,name',
        //     // Add validation rules for other fields
        // ]);
    
        // Exclude _token from the request data
        $data = $request->except('_token');
    
        // Create a new daily record
        Delivery::create($data);
    
        return redirect()->route('deliveries.index')
            ->with('success', 'Delivery record created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Delivery $delivery)
    {
        $deliveries = Delivery::with('antenatal')->get();  // deliveires object is the one compact function loops thru to access properties through 'daily-slug-variable' name in the view
        return view('deliveries.show', compact('delivery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery $delivery)
    {
        //
        return view('deliveries.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Delivery $delivery)
    {
        //
        $request->validate([
            
        ]);

        $delivery->update($request->all());

        return redirect()->route('deliveries.index')
            ->with('success', 'Delivery Record is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery)
    {
        //
        $delivery->delete();

        return redirect()->route('deliveries.index')
            ->with('success', 'Delivery Record deleted successfully.');
    }
}
