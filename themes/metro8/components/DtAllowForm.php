<?php

namespace Dashboard\Components;

use Illuminate\View\Component;

class DtAllowForm extends Component
{
    public $allowform;
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($allowform)
    {
        $this->allowform=$allowform;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('dashboard::components.datatable.allow_form');
    }
    
}