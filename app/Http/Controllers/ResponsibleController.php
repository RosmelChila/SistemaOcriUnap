<?php

namespace App\Http\Controllers;

use App\Models\Responsible;
use App\Http\Requests\StoreResponsibleRequest;
use App\Http\Requests\UpdateResponsibleRequest;
use App\Http\Resources\ResponsibleResource;

class ResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResponsibleResource::collection(Responsible::all());
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
     * @param  \App\Http\Requests\StoreResponsibleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResponsibleRequest $request)
    {
        return new ResponsibleResource(Responsible::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function show(Responsible $responsible)
    {
        return new ResponsibleResource($responsible);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function edit(Responsible $responsible)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResponsibleRequest  $request
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResponsibleRequest $request, Responsible $responsible)
    {
        $responsible->update($request->all());
        return new ResponsibleResource($responsible);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsible $responsible)
    {
        $responsible->delete();
        return new ResponsibleResource($responsible);
    }
}
