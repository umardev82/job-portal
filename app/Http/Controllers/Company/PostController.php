<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts= Post::all();
        return view('company.post.index',compact("posts"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
       //
       return view('company.post.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $post= new Post();
       $post->title = $request->title;
       $post->description =  $request->description;
       $post->created_by = Auth::id();
       $post->company = $request->company;
       $post->designation = $request->designation;
       $post->location = $request->location;
       $post->save();
       return redirect()->route('company.post.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('company.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->description =  $request->description;
        $post->created_by = Auth::id();
        $post->company = $request->company;
        $post->designation = $request->designation;
        $post->location = $request->location;
        $post->save();
        return redirect()->route('company.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $posts=Post::find($request->id);
        $posts->delete();
        return redirect()->route('company.post.index');
    }
}
