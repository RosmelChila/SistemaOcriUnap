<?php

namespace App\Http\Livewire\Datos;

use App\Models\Coverage;
use Livewire\Component;

class Crearcobertura extends Component
{
    public $open = false;
    public $name;

    public function save(){
        Coverage::create([
            'name' => $this->name
        ]);
        $this->emit('alert');
    }
    public function render()
    {
        return view('livewire.datos.crearcobertura');
    }
}
