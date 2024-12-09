<?php

namespace App\View\Components;

use Closure;
use App\Models\Major;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
    public $majors;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->majors = Major::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
