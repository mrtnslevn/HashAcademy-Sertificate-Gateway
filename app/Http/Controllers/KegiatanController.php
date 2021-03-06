<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans = Kegiatan::latest()->paginate(10);

        return Inertia::render('Kegiatan/Index', ['kegiatans'=> $kegiatans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Kegiatan/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama'=> 'required|max:90',
            'deskripsi'=> 'required'
        ]);

        Kegiatan::create($request->all());
        return Redirect::route('kegiatan.index')->with('message','data berhasil dihapus');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return Inertia::render('Kegiatan/Edit',[
            'kegiatan' =>[
                'id'=> $kegiatan->id,
                'nama'=>$kegiatan->nama,
                'deskripsi'=>$kegiatan->deskripsi
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return Redirect::route('kegiatan.index')->with('message','data berhasil dihapus');
    }
}
