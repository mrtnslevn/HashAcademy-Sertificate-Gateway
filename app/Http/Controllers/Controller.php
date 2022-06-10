<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
// <?php

// namespace App\Http\Controllers;

// use App\Models\Kegiatan;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;
// use Inertia\Inertia;

// class KegiatanController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $kegiatan = Kegiatan::latest()->paginate(10);
//         return Inertia::render('Kegiatan/Index', ['kegiatan'=> $kegiatan]);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         return Inertia::render('Kegiatan/Create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         Kegiatan::create(
//             Request::validate([
//                 'Nama_Kegiatan'=> ['required', 'max:90'],
//                 'Deskripsi_Kegiatan'=> ['required'],
//             ])
//             );
//             return Redirect::route('kegiatan.index');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Kegiatan  $kegiatan
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Kegiatan $kegiatan)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Kegiatan  $kegiatan
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Kegiatan $kegiatan)
//     {
//         return Inertia::render('Kegiatan/Edit', [
//             'kegiatan'=> [
//                 'id'=> $kegiatan->id,
//                 'Nama_Kegiatan'=> $kegiatan->Nama_Kegiatan,
//                 'Deskripsi_Kegiatan'=>$kegiatan->Deskripsi_Kegiatan

//             ]
//         ]);
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Kegiatan  $kegiatan
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Kegiatan $kegiatan)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Kegiatan  $kegiatan
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Kegiatan $kegiatan)
//     {
//         //
//     }
// }
