<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDosen;
use App\Http\Controllers\ControllerMahasiswa;
use App\Http\Controllers\ControllerJenisPublikasi;
use App\Http\Controllers\ControllerFakultas;
use App\Http\Controllers\ControllerProdi;
use App\Http\Controllers\ControllerKategoriJurnal;
use App\Http\Controllers\ControllerPenelitian;
use App\Http\Controllers\ControllerPkm;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function ()    {
        return view('home');
    });

    Route::resource('/Dosen', ControllerDosen::class);
    Route::resource('/Mahasiswa', ControllerMahasiswa::class);
    Route::resource('/Fakultas', ControllerFakultas::class);
    Route::resource('/Program-studi', ControllerProdi::class);
    Route::resource('/Jenis-publikasi', ControllerJenisPublikasi::class);
    Route::resource('/Kategori-jurnal', ControllerKategoriJurnal::class);
    Route::resource('/Penelitian', ControllerPenelitian::class);
    Route::resource('/Pengabdian-kepada-masyarakat', ControllerPkm::class);
});