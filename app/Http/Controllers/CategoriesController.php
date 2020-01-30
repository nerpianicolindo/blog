<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $posts = $category->posts()->paginate(5);
        $title = 'Posts de la categoria: ' . $category->name;
        return view('welcome', compact('posts', 'category', 'title'));
    }
}
