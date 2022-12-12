<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use App\Models\User;
use Livewire\Component;

class BusquedaComponent extends Component
{
    public $searchTerm ='';
    public $agreements;
    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->agreements = Agreement::where('title', $this->searchTerm)->get();
        } else {
            $this->agreements =Agreement::where('title', 'like', '%'.$this->searchTerm.'%')->get();
        }
        return view('livewire.busqueda-component');
    }
}
