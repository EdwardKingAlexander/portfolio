<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NavBar extends Component
{

    public $searchTerm;


    public function render()
    {
        sleep(1);
        
        $input = [
            'blogs' => DB::table('blogs')
            ->where('title', 'LIKE', '%'.$this->searchTerm.'%')
            ->orWhere('body', 'LIKE', '%'.$this->searchTerm.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(4),
            
        ];

        return view('livewire.nav-bar', $input);
    }
}

// Need to create a view all page for an individual search term
// setup the search to search for titles,body, and tags
// fix the author tag
// add the tags to the blog forloop
// order the search by created_at by decending order (Last posts first)
// on search page, sep the search results by tags
// fix html output in excerpt
// Seo for nav-bar livewire component