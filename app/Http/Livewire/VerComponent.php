<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class VerComponent extends Component
{
    public $id2;
    public function render()
    {
        $agreement=Agreement::where('id',$this->id2)->get();
        return view('livewire.ver-component',compact('agreement'));
    }
    public function mount($id2){
        $this->id2=$id2;
    }
    public function descargar($path){
        return Storage::disk('s3')->download($path);
    }
}
