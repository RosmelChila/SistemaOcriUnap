<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Coverage;
use App\Models\District;
use App\Models\Organization;
use App\Models\Province;
use App\Models\Region;
use App\Models\Responsible;
use Illuminate\Http\Request;

class AgregarController extends Controller
{
    public function index(){
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
            'responsibles'=>$responsibles
        ];
        return view('administrador.convenio.agregar',$dates);
    }
}
