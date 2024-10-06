<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class datePickerRange extends Component
{
    public $startPlaceholder;
    public $endPlaceholder;

    public $startDate;
    public $endDate;

    public $format;

    public function __construct($startPlaceholder = null, $endPlaceholder = null, $startDate = null, $endDate = null, $format = null)
    {
        $this->startPlaceholder = $startPlaceholder;
        $this->endPlaceholder = $endPlaceholder;

        $this->startDate = $startDate;
        $this->endDate = $endDate;

        $this->format = $format;
    }

    public function render()
    {
        return view('components.date-picker-range');
    }
}
