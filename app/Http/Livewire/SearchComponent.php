<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use Livewire\Component;

class SearchComponent extends Component
{
    public $resultados=[];
    public function render()
    {
        return view('livewire.search-component');
    }
}
