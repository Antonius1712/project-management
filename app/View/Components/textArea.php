<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textArea extends Component
{
    public $id;
    public $rows;
    public $placeholder;
    public $class;

    public function __construct($id = null, $rows = null, $placeholder = null, $class = null)
    {
        $this->id = $id;
        $this->rows = $rows;
        $this->placeholder = $placeholder;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.text-area');
    }
}
