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
use App\Models\User;
use Carbon\Carbon;
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
    public $ide,$pathh,$agreement=[];

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
            $this->approbation=$agreement->approbation;
            $this->subscription=$agreement->subscription;
            $this->years=$agreement->years;
            $this->months=$agreement->months;
            $this->days=$agreement->days;
            $this->objetive=$agreement->objetive;
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
            $this->paths=$agreement->path;
            $this->pathh=$agreement->path;
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
    public function saveup(){
        $validatedDate = $this->validate([
            'resolution'=>'required|unique:agreements,resolution,'.$this->ide,
            'title'=>'required',
            'objetive'=>'required',
            'approbation'=>'required',
            'subscription'=>'required',
            'years'=>'required',
            'months'=>'required',
            'days'=>'required',
            'sector'=>'required',
            'organization'=>'required',
            'location'=>'required',
            // 'country_id'=>'required',
            // 'region_id'=>'',
            // 'province_id'=>'',
            'coverage_id'=>'required',
            // 'district_id'=>'',
            'organization_id'=>'required'
            // 'path'=>'required'
        ]);

        
    $users=User::all();
    $date=Carbon::parse($this->subscription);
    $today=Carbon::now();
    $endDate=$date->addYears($this->years);
    $endDate=$date->addMonths($this->months);
    $endDate=$date->addDays($this->days);

    $expiration=$endDate->toDateString();
    if($endDate>=$today){
        if($this->years==0 && $this->months && $this->days==0){
            $status='VIGENTE';
            $notification=$date->addYears('1000');
        }
        if($this->years>=0 && $this->years<=3){
            $notification=Carbon::parse($expiration)->subMonths(6)->toDateString();
            $fechanotificacion=Carbon::parse($notification);
            if($today>=$fechanotificacion){
                $notification=$today->toDateString();
                $status='POR VENCER';
            }
            if($today<$fechanotificacion){
                $status='VIGENTE';
            }
        }
        if($this->years>3){
            $notification=Carbon::parse($expiration)->subMonths(9)->toDateString();
            $fechanotificacion=Carbon::parse($notification);
            if($today>=$fechanotificacion){
                $notification=$today->toDateString();
                $status='POR VENCER';
            }
            if($today<$fechanotificacion){
                $status='VIGENTE';
            }
        }
    }
    else{
        if($this->years==0 && $this->months==0 && $this->days==0){
            $status='VIGENTE';
            $notification=$date->addYears('1000');
        }
        if($this->years>0 && $this->years<=3){
            $notification=Carbon::parse($expiration)->subMonths(6)->toDateString();
            $status='VENCIDO';
        }
        if($this->years>3){
            $notification=Carbon::parse($expiration)->subMonths(9)->toDateString();
            $status='VENCIDO';
        }
    }
    if($this->paths!=$this->pathh){
       $path=$this->paths->store('files'); 
    }else{
        $path=$this->paths;
    }
    Agreement::where('id',$this->ide)->update($validatedDate+['country_id'=>$this->countryid]+['region_id'=>$this->regionid]+['province_id'=>$this->provinceid]+['district_id'=>$this->districtid]+['path'=>$path]+['expiration'=>$expiration]+['status'=>$status]+['notification'=>$notification]);
    $this->emit('alert');
    }
}
