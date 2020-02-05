<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['post_id', 'url'];

     public static function boot()
    {
        parent::boot();

        static::deleting(function ($photo){
            Storage::disk('public')->delete($photo->url);
        });
    }
}
