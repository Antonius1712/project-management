<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputDate extends Component
{
    public $id;
    public $name;
    public $placeholder;
    public $class;

    public function __construct($id = null, $name = null, $placeholder = null, $class = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.input-date');
    }
}
