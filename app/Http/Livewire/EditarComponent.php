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
use Livewire\WithFileUploads;

class EditarComponent extends Component
{
    use WithFileUploads;
    public $title,$resolution,$objetive,$approbation,$subscription;
    public $years=0,$months=0,$days=0,$sector,$organization;
    public $location,$coverage_id,$organization_id,$paths,$responsible=[];
    public $countryid,$regionid,$provinceid,$districtid;
    public $regions=[],$provinces=[],$districts=[];
    public $ide,$agreement=[];

    public function updatedCountryid($country_id){
        $this->regions=Region::where('country_id',$country_id)->pluck('name','id');
        $this->regionid=null;
        $this->provinces=[];
        $this->provinceid=null;
        $this->districts=[];
        $this->districtid=null;
    }
    public function updatedRegionid($region_id){
        $this->provinces=Province::where('region_id',$region_id)->pluck('name','id');
        $this->districts=[];
        $this->districtid=null;
    }
    public function updatedProvinceid($province_id){
        $this->districts=District::where('province_id',$province_id)->pluck('name','id');
    }
    public function mount($ide){
        $this->ide=$ide;
        $agreements=Agreement::where('id',$this->ide)->get();
        foreach($agreements as $agreement){
            $this->title=$agreement->title;
            $this->resolution=$agreement->resolution;
            $this->objetive=$agreement->objetive;
            $this->approbation=$agreement->approbation;
            $this->subscription=$agreement->subscription;
            $this->years=$agreement->years;
            $this->months=$agreement->months;
            $this->days=$agreement->days;
            $this->sector=$agreement->sector;
            $this->organization=$agreement->organization;
            $this->location=$agreement->location;
            $this->coverage_id=$agreement->coverage_id;
            $this->organization_id=$agreement->organization_id;
            $this->countryid=$agreement->country_id;
            $this->regions=Region::where('country_id',$this->countryid)->pluck('name','id');
            $this->regionid=$agreement->region_id;
            $this->provinces=Province::where('region_id',$this->regionid)->pluck('name','id');
            $this->provinceid=$agreement->province_id;
            $this->districts=District::where('province_id',$this->provinceid)->pluck('name','id');
            $this->districtid=$agreement->district_id;
            foreach($agreement->responsibles as $resp){
                $this->responsible[]=$resp->id;
            }
        }


    }
    public function render()
    {
        $countries=Country::pluck('name','id');
        // $regions=null;
        // $provinces=null;
        // $districts=null;
        $coverages=Coverage::pluck('name','id');
        $organizations=Organization::pluck('name','id');
        $responsibles=Responsible::pluck('name','id');
        $dates=[
            'countries'=>$countries,
            // 'regions'=>$regions,
            // 'provinces'=>$provinces,
            // 'districts'=>$districts,
            'coverages'=>$coverages,
            'organizations'=>$organizations,
            'responsibles'=>$responsibles
        ];
        // $agreements=Agreement::find($this->ide);
        return view('livewire.editar-component',$dates);
    }
}
