<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TipoServicoResource;
use App\Models\TipoServico;
use App\Http\Requests\StoreTipoServicoRequest;

class TipoServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposServico = TipoServico::all();
        return TipoServicoResource::collection($tiposServico);
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
     * @param  \App\Http\Requests\StoreTipoServicoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoServicoRequest $request)
    {
        $tipoServico = TipoServico::create($request->all());
        return new TipoServicoResource($tipoServico);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function show(TipoServico $tipoServico)
    {
        return new TipoServicoResource($tipoServico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoServico $tipoServico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipoServicoRequest  $request
     * @param  \App\Models\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTipoServicoRequest $request, TipoServico $tipoServico)
    {
        $tipoServico->update($request->all());
        return new TipoServicoResource($tipoServico);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoServico $tipoServico)
    {
        $tipoServico->delete();
        return response(null,204);
    }
}
