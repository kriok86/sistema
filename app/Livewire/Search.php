<?php

namespace App\Livewire;

use App\Models\Registro;
use Livewire\Component;

class Search extends Component
{
    public $search;

    
    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Registro::where('nombre','LIKE','%'. $this->search.'%')->where('status',1)->take(8)->get();
    }
}
