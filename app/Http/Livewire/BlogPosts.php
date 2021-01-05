<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPosts extends Component
{
    use WithPagination;


    public function render()
    {
        return view('livewire.blog-posts', [
            'posts' => Blog::paginate(5),
        ]);
    }
}
