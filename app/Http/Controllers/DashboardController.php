<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $date=Carbon::now()->toDateString();
        $total=Agreement::count();
        $international=Agreement::where('location','=','INTERNACIONAL')->count();
        $national=Agreement::where('location','=','NACIONAL')->count();
        $local=Agreement::where('location','=','LOCAL')->count();
        $agreements=Agreement::all();
        $ids[]=0;

        foreach($agreements as $agreement){

            $fechavigencia=Carbon::parse($agreement->expiration);
            $diferencia=$fechavigencia->diffInMonths($date);

            if($agreement->expiration<=$date && $agreement->years>3 && $diferencia<=9){
                $ids[]=$agreement->id;
            }
            if($agreement->expiration>=$date && $agreement->years<=3 && $diferencia<=6){
                $ids[]=$agreement->id;
            }
        }

        $expirate=Agreement::whereIn('id',$ids)->get();
        $dates=[
            'total'=>$total,
            'international'=>$international,
            'national'=>$national,
            'local'=>$local,
            'expirate'=>$expirate
        ];

        return view('dashboard',$dates);
    }
}
