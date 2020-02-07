<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StorePostRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\Support\Str;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function store(Request $request){
        $this->validate($request, ['title' => 'required | min:3']);
        $post = Post::create([
            'title' =>  $request->title,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('admin.posts.edit', $post);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post','categories','tags'));
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $post->update($request->all());

        $post->syncTags($request->tags);

        return redirect()
            ->route('admin.posts.edit', $post)
            ->with('flash', 'El post ha sido actualizado correctamente');
    }

    public function destroy (Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('flash', 'El post ha sido eliminado');
    }
}
