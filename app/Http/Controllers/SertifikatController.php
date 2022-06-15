<?php

namespace App\Http\Controllers;

use App\Models\sertifikat;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifs = sertifikat::orderBy('created_at')->paginate(10);
        return Inertia::render('Sertif/Index', ['sertifs'=> $sertifs]);
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
     * @param  \App\Models\sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(sertifikat $sertifikat)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(sertifikat $sertifikat)
    {
        //
    }
}
