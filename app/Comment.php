<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'name_user', 'comment', 'user_id'];

    public function post ()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
