<?php

use App\Http\Controllers\QRcontroller;
use App\Http\Controllers\QrController as ControllersQrController;
use App\Http\Controllers\SertifController;
use App\Http\Controllers\UserController;
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

    $qrCode = (String)QrCode::format('svg')->margin(4)->size(400)->errorCorrection('H')->generate('https://heroicons.dev/', '../public/qrcode.svg');

    return Inertia::render('Welcome', [
        'qrCode'=> $qrCode,
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
});

Route::middleware(['auth:sanctum', 'verified'])->resource('QrGenerator', QRcontroller::class);
//qrcode route
// Route::get('/QrCode/')->resource('QR', QRcontroller::class);

//users routes

Route::middleware(['auth:sanctum', 'verified'])->resource('users', UserController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('sertif',SertifController::class);
