<?php

namespace App\Http\Controllers;

use App\Events\PostVisit;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        if($post->isPublished() || auth()->check()){
            PostVisit::dispatch($post);
            return view('posts.show', compact('post'));
        }
        abort(404);
    }
}
