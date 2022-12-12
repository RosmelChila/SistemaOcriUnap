<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use Livewire\Component;
use Livewire\WithPagination;
class DashComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $expirate=Agreement::where('status','POR VENCER')->orderBy('expiration')->paginate(10);
        return view('livewire.dash-component',compact('expirate'));
    }
}
