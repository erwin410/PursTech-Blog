<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        $posts = Post::latest()->paginate(6);

        // $posts = auth()->user()->posts;
        
        return view('dashboard', compact('posts')); 
    }

 
}
