<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Antenatal;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts_natal = Post::with('antenatal')->get();
        return view('post_natal.index', compact('posts_natal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $antenatal = Antenatal::query()->orderBy('lname','desc')->get();
        return view('post_natal.create', 
    ['antenatal'=> $antenatal]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // If needed, add validation here
        // $request->validate([
        //     'name' => 'required|string|unique:post_natal,name',
        //     // Add validation rules for other fields
        // ]);
    
        // Exclude _token from the request data
        $data = $request->except('_token');
    
        // Create a new post natal record
        Post::create($data);
    
        return redirect()->route('post_natal.index')
            ->with('success', 'Post natal record saved successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(post $post)

    {
        $posts= Post::with('antenatal')->get();
        return view('post_natal.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        return view('post_natal.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $request->validate([
            
        ]);

        $post->update($request->all());

        return redirect()->route('post_natal.index')
            ->with('success', 'Post Natal record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();

        return redirect()->route('post_natal.index')
            ->with('success', 'Post Natal Record deleted successfully.');
    }
}
