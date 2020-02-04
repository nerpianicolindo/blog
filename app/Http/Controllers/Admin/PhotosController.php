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

        $post->photos()->create([
            'url' => $request->file('photo')->store('posts', 'public')
        ]);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        $photoPath = str_replace('storage', 'public', $photo->url);
        Storage::delete($photoPath);
        return back()->with('flash', 'Foto eliminada');
    }
}
