<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManutencaoRequest;
use App\Http\Resources\ManutencaoResource;
use App\Models\Manutencao;

class ManutencaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manutencoes = Manutencao::all();
        return ManutencaoResource::collection($manutencoes);
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
     * @param  \App\Http\Requests\StoreManutencaoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManutencaoRequest $request)
    {
        $manutencao = Manutencao::create($request->all());
        return new ManutencaoResource($manutencao);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manutencao $manutencao
     * @return \Illuminate\Http\Response
     */
    public function show(Manutencao $manutenco)
    {
        return new ManutencaoResource($manutenco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manutencao  $manutencao
     * @return \Illuminate\Http\Response
     */
    public function edit(Manutencao $manutencao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreManutencaoRequest  $request
     * @param  \App\Models\Manutencao  $manutencao
     * @return \Illuminate\Http\Response
     */
    public function update(StoreManutencaoRequest $request, Manutencao $manutenco)
    {
        $manutenco->update($request->all());
        return new ManutencaoResource($manutenco);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manutencao  $manutenco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manutencao $manutenco)
    {
        $manutenco->delete();
        return response(null,204);
    }
}
