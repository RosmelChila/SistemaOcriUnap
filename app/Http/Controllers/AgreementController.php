<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Http\Requests\StoreAgreementRequest;
use App\Http\Requests\UpdateAgreementRequest;
use App\Http\Resources\AgreementResource;
use Carbon\Carbon;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AgreementResource::collection(Agreement::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgreementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgreementRequest $request)
    {
        $date=Carbon::parse($request['subscription']);
        $today=Carbon::now();
        $endDate = $date->addYears($request['years']);
        $endDate = $date->addMonths($request['months']);
        $endDate = $date->addDay($request['days']);
        $expiration=$endDate->toDateString();
        //Si expiracion es mayor que hoy
        if($endDate >= $today){        
            if($request->years==0 && $request->months==0 && $request->days==0){
                $status='VIGENTE';
                $notification=$date->addYears('1000');
            }
            if($request->years>=0 && $request->years<=3){
                $notification=Carbon::parse($expiration)->subMonths(6)->toDateString();
                $fechanotificacion=Carbon::parse($notification);
                $diferencia=$fechanotificacion->diffInMonths($today);

                if($today>=$fechanotificacion){
                    $status='POR VENCER';
                }
                if($today<$fechanotificacion){
                    $status='VIGENTE';
                }
            }
            if($request->years>3){
                $notification=Carbon::parse($expiration)->subMonths(9)->toDateString();
                $fechanotificacion=Carbon::parse($notification);
                $diferencia=$fechanotificacion->diffInMonths($today);
                if($diferencia>9){
                    $status='VIGENTE';
                }if($diferencia<=9){
                    $status='POR VENCER';
                }
            }
        }
        //Si es Menor que hoy
        else
        {
            if($request->years==0 && $request->months==0 && $request->days==0){
                $status='VIGENTE';
                $notification=$date->addYears('1000');
            }
            if($request->years>0 && $request->years<=3){
                $notification=Carbon::parse($expiration)->subMonths(6)->toDateString();
                $status='VENCIDO';
            }
            if($request->years>3){
                $notification=Carbon::parse($expiration)->subMonths(9)->toDateString();
                $status='VENCIDO';
            }
        }
        $agreement=Agreement::create($request->all()+['expiration'=>$expiration]+['status'=>$status]+['notification'=>$notification]);
        $agreement->responsibles()->sync($request->responsibles);
        return new Agreement($agreement->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function show(Agreement $agreement)
    {
        return new AgreementResource($agreement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function edit(Agreement $agreement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgreementRequest  $request
     * @param  \App\Models\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgreementRequest $request, Agreement $agreement)
    {
        $agreement->update($request->all());
        $agreement->responsibles()->sync($request->responsibles);
        return new AgreementResource($agreement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agreement $agreement)
    {
        $agreement->delete();
        return new AgreementResource($agreement);
    }
}
