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
        $endDate = $date->addYears($request['years']);
        $endDate = $date->addMonths($request['months']);
        $endDate = $date->addDay($request['days']);
        $expiration=$endDate->toDateString();

        // if($expiration >= $date){
            
        // }

        // $notification=
        // $status=

        $agreement=Agreement::create($request->all()+['expiration'=>$expiration]);
        $agreement->responsibles()->sync($request->responsibles);
        return new Agreement($agreement);
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
