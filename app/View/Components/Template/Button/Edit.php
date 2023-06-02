<?php

namespace App\View\Components\Template\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Edit extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $dta;
    public $dto;
    public function __construct($url=null,$dta=null,$dto=null)
    {
        $this->url = $url;
        $this->dta = $dta;
        $this->dto = $dto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.button.edit');
    }
}
