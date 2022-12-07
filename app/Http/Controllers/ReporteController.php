<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Country;
use App\Models\Coverage;
use App\Models\District;
use App\Models\Organization;
use App\Models\Province;
use App\Models\Region;
use App\Models\Responsible;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reporte(){
        $countries=Country::pluck('name','id');
        $regions=Region::pluck('name','id');
        $provinces=Province::pluck('name','id');
        $districts=District::pluck('name','id');
        $coverages=Coverage::pluck('name','id');
        $organizations=Organization::pluck('name','id');
        $responsibles=Responsible::pluck('name','id');
        $agreements=Agreement::where('id','0');

        $dates=[
            'countries'=>$countries,
            'regions'=>$regions,
            'provinces'=>$provinces,
            'districts'=>$districts,
            'coverages'=>$coverages,
            'organizations'=>$organizations,
            'responsibles'=>$responsibles,
            'agreements'=>$agreements
        ];
        return view('administrador.convenio.reporte',$dates);
    }
    public function ver(Request $request){
        $agreement=Agreement::where('id',$request->id)->get();
        return view('administrador.convenio.verconvenio',['agreement'=>$agreement]);
    }
    public function consulta(Request $request){
        $agreements=Agreement::query();
        $countries=Country::pluck('name','id');
        $regions=Region::pluck('name','id');
        $provinces=Province::pluck('name','id');
        $districts=District::pluck('name','id');
        $coverages=Coverage::pluck('name','id');
        $organizations=Organization::pluck('name','id');
        $responsibles=Responsible::pluck('name','id');
        
        // if($request->local){
        //     $agreements=$agreements->where('location','=',$request->local);
        // }
        // if($request->countries){
        //     $agreements=$agreements->countries->where('country_id','=',$request->countries);
        // }
        if($request->responsibles){
            foreach($request->responsibles as $resp){
                $agreements->whereHas('responsibles',function($agreements) use($resp){
                    $agreements->where('name',$resp);
                });
            }
        }
        if($request->coverages){
            foreach($request->coverages as $coverage){
                $agreements->whereHas('coverage',function($agreements) use($coverage){
                    $agreements->where('name',$coverage);
                });
            }
        }
        if($request->organizations){
            $organization=$request->organizations;
                $agreements->whereHas('organizations',function($agreements) use($organization){
                    $agreements->whereIn('name',$organization);
                });
        }
        if($request->countries){
                $country=$request->countries;
                $agreements->whereHas('countries',function($agreements) use($country){
                    $agreements->whereIn('name',$country);
                });
        }
        if($request->locations){
            $agreements->whereIn('location',$request->locations);
        }
        if($request->sector){
            $agreements->whereIn('sector',$request->sector);
        }
        if($request->date1 && $request->date1!='null'){
            $agreements->where('subscription','>=',$request->date1);
        }
        if($request->date2 && $request->date2!='null'){
            $agreements->where('subscription','<=',$request->date2);
        }
        $dates=[
            'countries'=>$countries,
            'regions'=>$regions,
            'provinces'=>$provinces,
            'districts'=>$districts,
            'coverages'=>$coverages,
            'organizations'=>$organizations,
            'responsibles'=>$responsibles,
            'agreements'=>$agreements->get()
        ];
        
        return view('administrador.convenio.reporte',$dates);
    }
    public function search(Request $request){
        $resultados=Agreement::orWhere('title','like','%'.$request->search)
        ->orWhere('resolution','like','%'.$request->search)
        ->orWhere('objetive','like','%'.$request->search)->get();
        return view('administrador/convenio/buscar',['resultados'=>$resultados]);
    }
}
