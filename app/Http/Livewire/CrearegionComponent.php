<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Region;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class CrearegionComponent extends Component
{
    public $open = false;
    public $name,$country_id;

    public function save(){
        Region::create([
            'name' => $this->name,
            'country_id'=>$this->country_id
        ]);
    }
    public function render()
    {
        $countries=Country::pluck('name','id');
        return view('livewire.crearegion-component',compact('countries'));
    }
}
