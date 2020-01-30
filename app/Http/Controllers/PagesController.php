<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::published()->paginate(10);
        return view('welcome',compact('posts'));
    }
}
