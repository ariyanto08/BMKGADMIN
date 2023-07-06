<?php

namespace App\View\Components\TemplateWeb\BreadCrumb;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Crumb extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $crumb = null,public $url = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template-web.bread-crumb.crumb');
    }
}
