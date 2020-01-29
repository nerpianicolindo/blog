<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $tag = new Tag;
        $tag->name = 'Etiqueta 1';
        $tag->save();

        $tag->posts()->attach([1,2,4]);

        $tag = new Tag;
        $tag->name = 'Etiqueta 2';
        $tag->save();

        $tag->posts()->attach([1,3,4]);
        */

        factory(Tag::class, 15)->create();

    }
}
