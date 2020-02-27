<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, Post $post)
    {
        //dd($request);
        $post->comments()->create([
            'comment' => $request->comment,
            'name_user' => Auth::user()->name,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('posts.show', $post->slug)->withFlash('Comentario creado con exito');
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return back()->with('flash', 'Foto eliminada');
    }
}
