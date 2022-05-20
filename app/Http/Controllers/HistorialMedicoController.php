<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHistorialMedicoRequest;
use App\Http\Requests\UpdateHistorialMedicoRequest;
use App\Models\HistorialMedico;

class HistorialMedicoController extends Controller
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
     * @param  \App\Http\Requests\StoreHistorialMedicoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistorialMedicoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistorialMedico  $historialMedico
     * @return \Illuminate\Http\Response
     */
    public function show(HistorialMedico $historialMedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistorialMedico  $historialMedico
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorialMedico $historialMedico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistorialMedicoRequest  $request
     * @param  \App\Models\HistorialMedico  $historialMedico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistorialMedicoRequest $request, HistorialMedico $historialMedico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistorialMedico  $historialMedico
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorialMedico $historialMedico)
    {
        //
    }
}
