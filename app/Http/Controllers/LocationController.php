<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Country;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;



class LocationController extends Controller
{
    
    
    public function international(){
        $date=Carbon::now()->toDateString();
        $agreements=Agreement::all();
        $countries=Country::all();
        return view('administrador.filtro.internacional',['agreements'=>$agreements,'countries'=>$countries,'date'=>$date]);
    }
    public function countries(Request $request){
        $date=Carbon::now()->toDateString();
        // $agreements=Agreement::has('countries','=',$request);
        $agreements=Agreement::query()->whereHas('countries',function($query) use($request){$query->where('name',$request);});
        $countries=Country::all();
        return view('administrador.filtro.internacional',['agreements'=>$agreements,'countries'=>$countries,'date'=>$date]);
    }
    public function national(){
        return view('administrador.filtro.nacional');
    }
    public function local(){
        return view('administrador.filtro.local');
    }
}
