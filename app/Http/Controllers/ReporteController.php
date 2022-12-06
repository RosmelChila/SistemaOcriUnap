<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Country;
use App\Models\Coverage;
use App\Models\Organization;
use App\Models\Responsible;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reporte(){
        $responsibles=Responsible::all();
        $countries=Country::all();
        $coverages=Coverage::all();
        $organizations=Organization::all();
        $dates=[
            'responsibles'=>$responsibles,
            'countries'=>$countries,
            'coverages'=>$coverages,
            'organizations'=>$organizations
        ];
        return view('administrador.convenio.reporte',$dates);
    }
    public function ver(Request $request){
        $agreement=Agreement::where('id',$request->id)->get();
        return view('administrador.convenio.verconvenio',['agreement'=>$agreement]);
    }
}
