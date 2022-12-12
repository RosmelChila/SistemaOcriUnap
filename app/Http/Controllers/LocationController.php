<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Country;
use App\Models\Province;
use App\Models\Region;
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
        $country=$request->pais;
        // $agreements=Agreement::has('countries','=',$request);
        $agreements=Agreement::query()->whereHas('countries',function($query) use($country){$query->where('name',$country);})->get();
        $countries=Country::all();
        return view('administrador.filtro.internacional',['agreements'=>$agreements,'countries'=>$countries]);
    }
    
    public function national(){
        $date=Carbon::now()->toDateString();
        $agreements=Agreement::whereIn('location',['NACIONAL','LOCAL'])->get();
        $regions=Region::all();
        return view('administrador.filtro.nacional',['agreements'=>$agreements,'regions'=>$regions,'date'=>$date]);
    }
    public function regions(Request $request){
        $date=Carbon::now()->toDateString();
        // $agreements=Agreement::has('countries','=',$request);
        $agreements=Agreement::query()->whereHas('regions',function($query) use($request){$query->where('name',$request->region);});
        $regions=Region::all();
        return view('administrador.filtro.nacional',['agreements'=>$agreements,'regions'=>$regions,'date'=>$date]);
    }

    public function local(){
        $date=Carbon::now()->toDateString();
        $agreements=Agreement::where('location','LOCAL')->get();
        $provinces=Province::all();
        return view('administrador.filtro.local',['agreements'=>$agreements,'provinces'=>$provinces,'date'=>$date]);
    }
    public function provinces(Request $request){
        $date=Carbon::now()->toDateString();
        // $agreements=Agreement::has('countries','=',$request);
        $agreements=Agreement::query()->whereHas('provinces',function($query) use($request){$query->where('name',$request->province);});
        $provinces=Province::all();
        return view('administrador.filtro.local',['agreements'=>$agreements,'provinces'=>$provinces,'date'=>$date]);
    }
}
