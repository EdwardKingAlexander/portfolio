<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index')
        ->with('posts', Blog::paginate(10));
    }

    public function create()
    {
        return view('admin.blog.create');
    }
}
