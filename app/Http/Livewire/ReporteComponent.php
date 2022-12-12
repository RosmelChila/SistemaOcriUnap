<?php

namespace App\Http\Livewire;

use App\Models\Agreement;
use App\Models\Country;
use App\Models\Coverage;
use App\Models\District;
use App\Models\Organization;
use App\Models\Province;
use App\Models\Region;
use App\Models\Responsible;
use Livewire\Component;

class ReporteComponent extends Component
{
    public $responsible=[],$country=[],$location=[],$sector=[],$cobertura=[],$category=[],$organization=[],$inidate,$enddate;
    public $agreements=[];
    public function render()
    {
        $countries=Country::pluck('name','id');
        $regions=Region::pluck('name','id');
        $provinces=Province::pluck('name','id');
        $districts=District::pluck('name','id');
        $coverages=Coverage::pluck('name','id');
        $organizations=Organization::pluck('name','id');
        $responsibles=Responsible::pluck('name','id');
        $dates=[
            'countries'=>$countries,
            'regions'=>$regions,
            'provinces'=>$provinces,
            'districts'=>$districts,
            'coverages'=>$coverages,
            'organizations'=>$organizations,
            'responsibles'=>$responsibles,
        ];
        return view('livewire.reporte-component',$dates);
    }
    public function reporte(){
        $agreements=Agreement::query();

        if($this->responsible){
            $resp=$this->responsible;
                $agreements->whereHas('responsibles',function($agreements) use($resp){
                    $agreements->whereIn('name',$resp);
                });
        }
        if($this->cobertura){
                $coberturas=$this->cobertura;
                $agreements->whereHas('coverages',function($agreements) use($coberturas){
                    $agreements->whereIn('name',$coberturas);
                });
        }
        if($this->category){
            $organization=$this->category;
                $agreements->whereHas('organizations',function($agreements) use($organization){
                    $agreements->whereIn('name',$organization);
                });
        }
        if($this->country){
                $country=$this->country;
                $agreements->whereHas('countries',function($agreements) use($country){
                    $agreements->whereIn('name',$country);
                });
        }
        if($this->location){
            $agreements->whereIn('location',$this->location);
        }
        if($this->sector){
            $agreements->whereIn('sector',$this->sector);
        }
        if($this->inidate && $this->inidate!='null'){
            $agreements->where('subscription','>=',$this->inidate);
        }
        if($this->enddate && $this->enddate!='null'){
            $agreements->where('subscription','<=',$this->enddate);
        }
        $this->agreements=$agreements->get();
    }
}
