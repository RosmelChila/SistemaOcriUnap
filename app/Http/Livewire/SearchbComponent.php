<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use Livewire\Component;

class SearchbComponent extends Component
{
    public $search='';
    public $resultados=[];
    public function render()
    {
        return view('livewire.searchb-component');
    }
    public function buscar(){
        $this->resultados=Agreement::where('id','1')->get();
    }
}
