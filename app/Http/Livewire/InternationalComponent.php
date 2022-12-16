<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class InternationalComponent extends Component
{
    use WithPagination;
    public $countries=[];
    public $country='PERU';
    public function render()
    {
        $paises=$this->country;
        $agreements=Agreement::query()->whereHas('countries',function($query) use($paises){$query->where('name',$paises);})->paginate(10);;
        $this->countries=Country::all();
        return view('livewire.international-component',compact('agreements'));
    }
    public function countries($pais){
        $this->country=$pais;
    }
    public function descargar($path){
        return Storage::disk('s3')->download($path);
    }
}