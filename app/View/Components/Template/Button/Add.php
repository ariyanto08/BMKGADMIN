<?php

namespace App\View\Components\Template\Button;

use Closure;
use Exception;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Add extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $ket;
    public $dta;
    public $dto;
    public function __construct($url=null,$ket=null,$dta=null,$dto=null)
    {
        if (!$url) throw new Exception("Button Memerlukan URL");
        $this->url = $url;
        $this->ket = $ket;
        $this->dta = $dta;
        $this->dto = $dto;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.button.add');
    }
}
