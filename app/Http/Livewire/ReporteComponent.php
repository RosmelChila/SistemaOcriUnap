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
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class ReporteComponent extends Component
{
    public $responsible=[],$country=[],$location=[],$sector=[],$cobertura=[],$category=[],$organization=[],$inidate,$enddate;
    public $agreements=[],$title='INGRESE EL TITULO DE SU REPORTE AQUI';
    public $organizacion=[];
    public $status=[];
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
    public function updatedTitle(){
        $this->title=strtoupper($this->title);
    }
    public function reporte(){
        $agreements=Agreement::query();

        if($this->responsible){
            $resp=$this->responsible;
                $agreements->whereHas('responsibles',function($agreements) use($resp){
                    $agreements->whereIn('name',$resp);
                });
        }
        if($this->status){
            $agreements->whereIn('status',$this->status);
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
        if($this->organizacion){
            $agreements->where('organization',$this->organizacion);
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
    public function genpdfcat(){
        $pdf=Pdf::loadView('PDFCAT',['agreements'=>$this->agreements,'titulo'=>$this->title])->output();
        return response()->streamDownload(
            fn()=>print($pdf),"filename.pdf"
        );
    }
    public function genpdfest(){
        $estadistico=Agreement::all();
        if($this->inidate && $this->inidate!='null'){
            $estadistico=$estadistico->where('subscription','>=',$this->inidate);
        }
        if($this->enddate && $this->enddate!='null'){
            $estadistico=$estadistico->where('subscription','<=',$this->enddate);
        }
        $CI=$estadistico->where('location','INTERNACIONAL')->count();
        $CN=$estadistico->whereIn('location',['NACIONAL','LOCAL'])->count();
        $CUN=$estadistico->where('organization_id','1')->count();
        $CHCS=$estadistico->where('organization_id','2')->count();
        $CM=$estadistico->where('organization_id','3')->count();
        $CMUN=$estadistico->where('organization_id','4')->count();
        $CDIP=$estadistico->where('organization_id','5')->count();
        $CEF=$estadistico->where('organization_id','6')->count();
        $CEM=$estadistico->where('organization_id','7')->count();
        $CCC=$estadistico->where('organization_id','8')->count();
        $CONG=$estadistico->where('organization_id','9')->count();
        $CDEP=$estadistico->where('organization_id','10')->count();
        $OTROS=$estadistico->where('organization_id','11')->count();
        $TOTAL=$estadistico->where('organization_id','12')->count();
        $dataes=[
            'CI'=>$CI,'CN'=>$CN
            // ,$CUN,$CHCS,$CM,$CMUN,$CDIP,$CEF,$CEM,$CCC,$CONG,$CDEP,$OTROS
        ];
        $pdf=Pdf::loadView('PDFES',$dataes)->output();
        return response()->streamDownload(
            fn()=>print($pdf),"estadistico.pdf"
        );
    }
}
