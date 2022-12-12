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
use App\Notifications\AgreementExpiration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;

class AgregarComponent extends Component
{
    use WithFileUploads;
    public $title,$resolution,$objetive,$approbation,$subscription;
    public $years=0,$months=0,$days=0,$sector,$organization;
    public $location,$coverage_id,$organization_id,$paths,$responsible=[];
    public $countryid=null,$regionid=null,$provinceid=null,$districtid=null;
    public $regions=[],$provinces=[],$districts=[];

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

    }
    public function updatedProvinceid($province_id){
        $this->districts=District::where('province_id',$province_id)->pluck('name','id');
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
        return view('livewire.agregar-component',$dates);
    }
    // public function updatedselecteddistricts($id){
    //     $this->regions=Region::where('distric_id',$id)->get();
    // }

    public function store(){
            $country_id=$this->countryid;
            $region_id=$this->regionid;
            $province_id=$this->provinceid;
            $district_id=$this->districtid;
        $validatedDate = $this->validate([
            'resolution'=>'required|unique:agreements,resolution',
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
    $path=$this->paths->store('files');
    $agreement=Agreement::create($validatedDate+['country_id'=>$this->countryid]+['region_id'=>$this->regionid]+['province_id'=>$this->provinceid]+['district_id'=>$this->districtid]+['path'=>$path]+['expiration'=>$expiration]+['status'=>$status]+['notification'=>$notification]);
    $agreement->responsibles()->sync($this->responsible);
    if($agreement->status=='POR VENCER'){
        Notification::send($users,new AgreementExpiration ($agreement->id,$agreement->status));
    }
    session()->flash('message', 'Post Created Successfully.');
    }
}
