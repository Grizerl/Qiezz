<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return view('post.index',[
            'posts'=>$posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_post=new Post();
        $new_post->name=$request->name; 
        $new_post->surname=$request->surname; 
        $new_post->age=$request->age; 
        $new_post->status=$request->status; 
        $new_post->save();

        return redirect()->back()->with("success","Родича додано успішно");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post=Post::orderBy('created_at','desc')->get();
        return view('post.edit',[
             'post'=>$post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->name=$request->name; 
        $post->surname=$request->surname; 
        $post->age=$request->age; 
        $post->status=$request->status; 
        $post->save();

        return redirect()->back()->with("success","Редагування пройшло успішно");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with("success","Родича видалено успішно");

    }
}
