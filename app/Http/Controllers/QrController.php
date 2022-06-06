<?php

namespace App\Http\Controllers;

use App\Models\QrGenerator;
use Illuminate\Http\Request;
use Inertia\Inertia;
use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // $qrcode = new Genera
    // $data   = $qrcode->size(200)->generate('Make a qrcode without Laravel!');

    //$data = QrCode::generate('coba generator qr');
    $var = (string)QrCode::format('svg')->margin(0)->size(200)->generate('test qr');

    return Inertia::render('/QrCode/Index', compact('var'));
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
     * @param  \App\Models\QrGenerator  $qrGenerator
     * @return \Illuminate\Http\Response
     */
    public function show(QrGenerator $qrGenerator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QrGenerator  $qrGenerator
     * @return \Illuminate\Http\Response
     */
    public function edit(QrGenerator $qrGenerator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QrGenerator  $qrGenerator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QrGenerator $qrGenerator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QrGenerator  $qrGenerator
     * @return \Illuminate\Http\Response
     */
    public function destroy(QrGenerator $qrGenerator)
    {
        //
    }
}
