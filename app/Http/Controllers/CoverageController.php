<?php

namespace App\Http\Controllers;

use App\Models\Coverage;
use App\Http\Requests\StoreCoverageRequest;
use App\Http\Requests\UpdateCoverageRequest;

class CoverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCoverageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoverageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coverage  $coverage
     * @return \Illuminate\Http\Response
     */
    public function show(Coverage $coverage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coverage  $coverage
     * @return \Illuminate\Http\Response
     */
    public function edit(Coverage $coverage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoverageRequest  $request
     * @param  \App\Models\Coverage  $coverage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoverageRequest $request, Coverage $coverage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coverage  $coverage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coverage $coverage)
    {
        //
    }
}
