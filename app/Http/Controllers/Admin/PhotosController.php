<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'photo' => 'required | image | max:2048'
        ]);

        $photo = $request->file('photo')->store('public');

        Photo::create([
           'post_id' => $post->id,
           'url' => Storage::url($photo)
        ]);
    }
}
