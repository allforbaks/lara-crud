<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          =>  'required',
            'description'         =>  'required',
        ]);

        $posts = new Post;

        $posts->title = $request->title;
        $posts->description = $request->description;

        $posts->save();

        return redirect()->route('index')->with('success', 'Posts Added successfully.');
    }
}
