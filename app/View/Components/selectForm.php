<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class selectForm extends Component
{
    public $options;
    public $selected;

    public function __construct($options = [], $selected = null)
    {
        $this->options = $options;
        $this->selected = $selected;
    }

    public function render()
    {
        return view('components.select-form');
    }
}
