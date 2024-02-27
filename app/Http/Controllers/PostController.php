<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("posts/index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        
        Post::create([
            "title"=>$request->title,
            "body"=>$request->body
        ]);
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delete_posts = Post::onlyTrashed()->get();
        return view("posts/show_delete", compact("delete_posts"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view("posts/edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Post::findOrFail($id)->update([
            "title"=>$request->title,
            "body"=>$request->body,
        ]);
        return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route("posts.index");
    }

    // this is function to restore deleted data from database
    public function restore($id)
    {
        Post::onlyTrashed()->where("id", $id)->restore();
        return redirect()->back();
    }

    // this is function to delete items forever from dastabase
    public function force_delete($id)
    {
        Post::onlyTrashed()->where("id", $id)->forceDelete();
        return redirect()->back();
    }
}
