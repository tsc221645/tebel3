<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class individual_product extends Component
{
    public $title;
    public $image;
    public $link;
    public $moreLink;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $image, $link, $moreLink)
    {
        $this->title = $title;
        $this->image = $image;
        $this->link = $link;
        $this->moreLink = $moreLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.individual_product');
    }
}
