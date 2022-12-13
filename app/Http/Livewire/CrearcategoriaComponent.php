<?php

namespace App\Http\Livewire;

use App\Models\Organization;
use Livewire\Component;

class CrearcategoriaComponent extends Component
{

    public $open = false;
    public $name;

    public function save(){
        Organization::create([
            'name' => $this->name
        ]);
    }
    public function render()
    {
        return view('livewire.crearcategoria-component');
    }
}
