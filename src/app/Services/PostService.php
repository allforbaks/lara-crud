<?php

namespace App\Services;

use App\Models\Post;

class PostService 
{
    public function store($request) 
    {
        $data = $request->validated();
        $post = Post::create($data);
    }

    public function update($request, $post) 
    {
        $data = $request->validated();
        $post->update($data);
    }

}