<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class BreadCumb extends Component
{

    public $currentPage;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->currentPage = ucfirst(str_replace('-', ' ', Route::currentRouteName()));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bread-cumb');
    }
}
