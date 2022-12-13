<?php

namespace App\Http\Livewire;

use App\Models\Responsible;
use Livewire\Component;

class CrearesponsableComponent extends Component
{
    public $open = false;
    public $name,$description;

    public function save(){
        Responsible::create([
            'name' => $this->name,
            'description'=>$this->description
        ]);
    }
    public function render()
    {
        return view('livewire.crearesponsable-component');
    }
}
