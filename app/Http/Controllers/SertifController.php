<?php

namespace App\Http\Controllers;

use App\Models\sertif;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SertifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sertifs = sertif::all();
        return Inertia::render('Sertif/Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Sertif/Create');
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
     * @param  \App\Models\sertif  $sertif
     * @return \Illuminate\Http\Response
     */
    public function show(sertif $sertif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sertif  $sertif
     * @return \Illuminate\Http\Response
     */
    public function edit(sertif $sertif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sertif  $sertif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sertif $sertif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sertif  $sertif
     * @return \Illuminate\Http\Response
     */
    public function destroy(sertif $sertif)
    {
        //
    }
}
