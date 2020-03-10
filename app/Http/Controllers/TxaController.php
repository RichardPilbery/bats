<?php

namespace App\Http\Controllers;

use App\Txa;
use Illuminate\Http\Request;

class TxaController extends Controller
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
     * @param  \App\Txa  $txa
     * @return \Illuminate\Http\Response
     */
    public function show(Txa $txa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Txa  $txa
     * @return \Illuminate\Http\Response
     */
    public function edit(Txa $txa)
    {
        dd($txa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Txa  $txa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Txa $txa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Txa  $txa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Txa $txa)
    {
        //
    }
}
