<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoVeiculo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTipoVeiculoRequest;
use App\Http\Resources\TipoVeiculoResource;

class TipoVeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposVeiculo = TipoVeiculo::all();
        return TipoVeiculoResource::collection($tiposVeiculo);
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
     * @param  \App\Http\Requests\StoreTipoVeiculoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoVeiculoRequest $request)
    {
        $tipoVeiculo = TipoVeiculo::create($request->all());
        return new TipoVeiculoResource($tipoVeiculo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoVeiculo  $tipoVeiculo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoVeiculo $tipoVeiculo)
    {
        return new TipoVeiculoResource($tipoVeiculo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoVeiculo  $tipoVeiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoVeiculo $tipoVeiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipoVeiculoRequest  $request
     * @param  \App\Models\TipoVeiculo  $tipoVeiculo
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTipoVeiculoRequest $request, TipoVeiculo $tipoVeiculo)
    {
        $tipoVeiculo->update($request->all());
        return new TipoVeiculoResource($tipoVeiculo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoVeiculo  $tipoVeiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoVeiculo $tipoVeiculo)
    {
        $tipoVeiculo->delete();
        return response(null,204);
    }
}
