<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class TableComponents extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $rows;
    public $model;
    
    // public $Eslam ;
    public function __construct($model , Array $rows)
    {
        // dd($rows); 
        $this->rows = $rows;
        $this->model = $model;
        // dd($this->data);
        // $this->Eslam = $array;
        
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->data);
        
        return view('components.table-components');
    }
}
