<?php

use App\Comment;
use App\Post;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*Storage::disk('public')->deleteDirectory('posts');
        $categories = Category::all();
        $categories->each(function ($c){
            $posts = factory(Post::class, 10)->make();
            $c->posts()->saveMany($posts);
            $posts->each(function ($p) {
                $p->slug = Str::slug($p->title);
                $p->save();
                $tags = Tag::all()->pluck('id')->toArray();
                $p->tags()->attach(\Illuminate\Support\Arr::random($tags,2));
            });

        });*/
        $posts = Post::all();
        $posts->each(function ($p){
           $comments = factory(Comment::class, 5)->make();
           $p->comments()->saveMany($comments);
        });

    }
}
