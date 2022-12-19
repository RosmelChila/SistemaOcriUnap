<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\District;
use App\Models\Province;
use App\Models\Region;
use Livewire\Component;

class CreardistritoComponent extends Component
{
    public $open = false;
    public $name,$provinces=[],$regions=[];
    public $countryid,$regionid,$provinceid;

    public function save(){
        District::create([
            'name' => $this->name,
            'province_id'=>$this->provinceid
        ]);
        $this->emit('alert');
    }
    public function updatedCountryid($country_id){
        $this->regions=Region::where('country_id',$country_id)->pluck('name','id');
        $this->regionid=null;
        $this->provinces=[];
        $this->provinceid=null;
    }
    public function updatedRegionid($region_id){
        $this->provinces=Province::where('region_id',$region_id)->pluck('name','id');

    }
    public function render()
    {
        $countries=Country::pluck('name','id');
        return view('livewire.creardistrito-component',compact('countries'));
    }
}
