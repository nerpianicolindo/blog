<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::whereNotNull('published_at')
                    ->where('published_at', '<=', Carbon::now())
                    ->latest('published_at')
                    ->get();
        return view('welcome', compact('posts'));
    }
}
