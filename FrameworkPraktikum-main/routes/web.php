<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']) ->name('mahasiswa.show');

Route::get('/home',[HomeController::class,'index']) ->name('home');

Route::get('/nama/{param1?}', function ($param1 = '') {
    return 'Nama saya: '.$param1;
});
Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});
Route::get('/nama/{param1?}/{nim?}', function ($param1 = '',$nim='') {
    return 'Nama saya: '.$param1.'<br>Nim : '.$nim;
});

Route::get('/about', function(){
    return view('halaman-about');
});
Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::resource('mhs', MahasiswaController::class);

Route::resource('pelanggan', PelangganController::class);

Route::resource('user', UserController::class);
