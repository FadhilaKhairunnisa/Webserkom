<?php

use App\Http\Controllers\HasilController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

route::resource('pendaftaran', PendaftaranController::class);

route::get('/get-mahasiswa/{nim}',[PendaftaranController::class, 'getMahasiswa'] );

route::resource('hasil', HasilController::class);