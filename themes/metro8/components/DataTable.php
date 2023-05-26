<?php

namespace Dashboard\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $dataOrder;
    public $dataPageLength;
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($dataPageLength='25', $dataOrder='[[ 1, "desc" ]]')
    {
        $this->dataPageLength = $dataPageLength;
        $this->dataOrder = $dataOrder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('dashboard::components.datatable.datatable');
    }
}