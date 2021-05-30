<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome')
        ->with('categories',Category::all())
        ->with('posts',Post::paginate(6))
        ->with('tags',Tag::all());
    }
}
