<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FooterSection extends Component
{

    public $section;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($section)
    {
        $this->section = $section;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.footer-section');
    }
}
