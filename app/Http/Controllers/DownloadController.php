<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function descargar(Request $request){

        $agreement=Agreement::find($request->ide);
        if(Storage::disk('s3')->exists($agreement->path)){
            return Storage::disk('s3')->response($agreement->path);
        };
        return response('',404);
    }
}
