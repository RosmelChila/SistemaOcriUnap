<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use App\Models\Province;
use App\Models\Region;
use Livewire\Component;
use Livewire\WithPagination;

class LocalComponent extends Component
{
    use WithPagination;
    public $regions=[];
    public $region='SAN ROMAN';

    public function render()
    {
        $regiones=$this->region;
        $agreements=Agreement::query()->whereHas('provinces',function($query) use($regiones){$query->where('name',$regiones);})->paginate(10);;
        $this->regions=Province::query()->whereHas('regions',function($q){$q->where('name','PUNO');})->get();
        return view('livewire.local-component',compact('agreements'));
    }
    public function regions($region){
        $this->region=$region;
    }
}
