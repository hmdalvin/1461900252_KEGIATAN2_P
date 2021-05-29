<?php

use App\Http\Controllers\BukuController0252;
use App\Http\Controllers\BukuJoinController0252;
use App\Http\Controllers\BukuJoinWhereController0252;
use App\Http\Controllers\BukuWhereController0252;
use App\Http\Controllers\MahasiswaController0252;
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
    return view('welcome');
});

Route::resource('mahasiswa0252', MahasiswaController0252::class);

Route::resource('buku0252', BukuController0252::class);

Route::resource('bukuwhere0252', BukuWhereController0252::class);

Route::resource('joinbuku0252', BukuJoinController0252::class);

Route::resource('joinbukuwhere0252', BukuJoinWhereController0252::class);