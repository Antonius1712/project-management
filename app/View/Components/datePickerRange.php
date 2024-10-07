<?php

namespace App\View\Components;

use Carbon\Carbon;
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
    public $modelStart;
    public $modelEnd;

    public function __construct($startPlaceholder = null, $endPlaceholder = null, $startDate = null, $endDate = null, $format = null, $modelStart = null, $modelEnd = null)
    {
        $this->startPlaceholder = $startPlaceholder;
        $this->endPlaceholder = $endPlaceholder;

        $this->startDate = $startDate;
        $this->endDate = $endDate;

        $this->format = $format;
        $this->modelStart = Carbon::CreateFromFormat('d M Y', $modelStart)->format('d/m/Y');
        $this->modelEnd = Carbon::CreateFromFormat('d M Y', $modelEnd)->format('d/m/Y');
    }

    public function render()
    {
        return view('components.date-picker-range');
    }
}
