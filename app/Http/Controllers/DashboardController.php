<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total=Agreement::count();
        $international=Agreement::where('location','=','INTERNACIONAL')->count();
        $national=Agreement::where('location','=','NACIONAL')->count();
        $local=Agreement::where('location','=','LOCAL')->count();
        return view('dashboard',[
            'total'=>$total,
            'international'=>$international,
            'national'=>$national,
            'local'=>$local
        ]);
    }
}
