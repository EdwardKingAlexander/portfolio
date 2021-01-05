<?php

namespace App\View\Components;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\View\Component;

class BlogPost extends Component
{

    public $title;
    public $description;
    public $image;
    public $author;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blog-post')
        ->with('posts', Blog::latest()->limit(3)->get())
        ->with('tags', Tag::all());
        
    }
}
