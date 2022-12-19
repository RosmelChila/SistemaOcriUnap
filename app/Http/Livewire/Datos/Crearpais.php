<?php

namespace App\Http\Livewire\Datos;

use App\Models\Country;
use Livewire\Component;

class Crearpais extends Component
{
    public $open = false;
    public $name;

    public function save(){
        Country::create([
            'name' => $this->name
        ]);
        $this->emit('alert');
    }
    public function render()
    {
       return view('livewire.datos.crearpais');

    }
}
