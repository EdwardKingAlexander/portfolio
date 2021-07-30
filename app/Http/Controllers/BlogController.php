<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function show($id)
    {
        return view('blog.show')
        ->with('post', Blog::find($id));
    }

 
}
