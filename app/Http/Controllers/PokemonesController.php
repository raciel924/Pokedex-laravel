<?php

namespace App\Http\Controllers;

use App\Models\pokemones;
use Illuminate\Http\Request;

class PokemonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pokemones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pokemones.insert');
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
        $dato1 = $request->input('datos');
        pokemones::insert($dato1);
        return response()-> hola;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pokemones  $pokemones
     * @return \Illuminate\Http\Response
     */
    public function show(pokemones $pokemones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pokemones  $pokemones
     * @return \Illuminate\Http\Response
     */
    public function edit(pokemones $pokemones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pokemones  $pokemones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pokemones $pokemones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pokemones  $pokemones
     * @return \Illuminate\Http\Response
     */
    public function destroy(pokemones $pokemones)
    {
        //
    }
}
