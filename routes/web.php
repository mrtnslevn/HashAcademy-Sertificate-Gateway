<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QRcontroller;
//use App\Http\Controllers\QrController as ControllersQrController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Database\Factories\SertifikatFactory;
// use BaconQrCode\Encoder\QrCode;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // $qrcode = new Generator;
    // $data= $qrcode->size(200)->generate('Make a qrcode without Laravel!');

    $qrCode = (String)QrCode::format('svg')->margin(4)->size(400)->generate('https://heroicons.dev/');

    return Inertia::render('Welcome', [
        'CodeQR'=> $qrCode,
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('sertifikat', SertifikatController::class);
    Route::resource('kegiatan', KegiatanController::class);
});

Route::resource('posts', PostController::class);
