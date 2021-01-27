<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('das', function () {
    return view('layouts.index');
});
Route::resource('prov', ProvinsiController::class);
Route::resource('kota', KotaController::class);  



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group(['prefix' => 'backend', 'middleware'=>'auth'],function(){
//     Route::resource('guru','GuruController');
//     Route::resource('siswa','SiswaController');
//     Route::resource('mapel','MapelController');
//     Route::resource('eskul','EskulController');
//     Route::resource('perpustakaan','PerpustakaanController');
//     });