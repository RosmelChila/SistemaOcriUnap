<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Province;
use App\Models\Region;
use Livewire\Component;

class CrearprovinciaComponent extends Component
{
    public $open = false;
    public $name,$region,$country,$regions=[];

    public function save(){
        Province::create([
            'name' => $this->name,
            'region_id'=>$this->region
        ]);
    }
    public function updatedCountry($country_id){
        $this->regions=Region::where('country_id',$country_id)->pluck('name','id');
    }
    public function render()
    {
        $countries=Country::pluck('name','id');
        return view('livewire.crearprovincia-component',compact('countries'));
    }
}
