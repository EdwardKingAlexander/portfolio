<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminBlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        return view('admin.blog.index')
        ->with('posts', Blog::paginate(10));
    }

    public function create()
    {
        return view('admin.blog.create')
        ->with('tags', Tag::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|min:10',
            'body' => 'required'
            
        ]);

       
        $blog = Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $request->user_id,
        ]);

        $newBlog = Blog::find($blog->id);

        foreach($request->tags as $tag)
       {
          $newBlog->tags()->attach($tag);
       }


        return redirect('/admin/blog');
    }

    public function destroy($id)
    {
        $blogPost = Blog::findOrFail($id);
        $blogPost->delete();

        return redirect('admin/blog');
    }
}
