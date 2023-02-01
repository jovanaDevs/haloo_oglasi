<?php

namespace App\Http\Controllers;

use App\Http\Resources\OglasResource;
use App\Models\Oglas;
use Illuminate\Http\Request;

class OglasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oglasi=Oglas::all();
        return OglasResource::collection($oglasi);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oglas  $oglas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oglas=Oglas::find($id);
        return new OglasResource($oglas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oglas  $oglas
     * @return \Illuminate\Http\Response
     */
    public function edit(Oglas $oglas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oglas  $oglas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oglas $oglas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oglas  $oglas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oglas $oglas)
    {
        //
    }
}
