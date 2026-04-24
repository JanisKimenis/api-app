<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function store(Request $request){

        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

    return response()->json($post, 201);
    }

    // public function destroy(){

    // }



}
