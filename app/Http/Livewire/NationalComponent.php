<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use App\Models\Region;
use Livewire\Component;
use Livewire\WithPagination;

class NationalComponent extends Component
{
    use WithPagination;
    public $regions=[];
    public $region='PUNO';

    public function render()
    {
        $regiones=$this->region;
        $agreements=Agreement::query()->whereHas('regions',function($query) use($regiones){$query->where('name',$regiones);})->paginate(10);;
        $this->regions=Region::query()->whereHas('countries',function($q) use($regiones){$q->where('name','PERU');})->get();
        return view('livewire.national-component',compact('agreements'));
    }
    public function regions($region){
        $this->region=$region;
    }
}
