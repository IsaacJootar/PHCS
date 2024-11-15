<?php

namespace App\Http\Controllers;

use App\Models\Antenatal; //still use this assessment register model
use App\Models\Daily;
use App\Models\Tetanus;
use App\Models\Note;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        //
        $clients = Antenatal::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //

        
    }

    /**
     * Display the specified resource.
     */


    public function show(Antenatal $antenatal){

        $dailies= Daily::query() // slug ID from Route, the filtered result is what wil return to view
        ->orderBy('id','desc')
        ->get(['id', 'name_patient','cl_date', 'cl_phone']);
        $posts= Post::where('patient_id', $antenatal->id) 
        ->orderBy('id','desc')
        ->get(['id', 'month_year', 'patient_f']);
        $tetanus= Tetanus::where('patient_id', $antenatal->id) 
        ->orderBy('id','desc')
        ->get(['id', 'dov', 'cl_phone']);
        $notes= Note::where('patient_id', $antenatal->id) 
        ->orderBy('id','desc')
        ->get(['id', 'dov', 'phone']);


    return view('clients.show', compact('antenatal','dailies','posts', 'tetanus', 'notes'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Antenatal $antenatal){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Antenatal $antenatal){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Antenatal $antenatal){
       
        //
    }
}
