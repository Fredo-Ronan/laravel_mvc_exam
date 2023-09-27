<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil', function() {
    return view('profil', [
        "nama" => "Boniface Fredo Ronan Antolino",
        "deskripsi" => "Seorang mahasiswa informatika UAJY",
        "alamat" => "Jl.gabugan, Sleman, Yogyakarta",
        "email" => "210711446@students.uajy.ac.id",
        "telepon" => "082326988374",
        "hobi" => "Bermain/Mendengarkan Musik"
    ]);
});

Route::get('/form', function() {
    $dataForm = [
        "nama" => "Boniface Fredo Ronan Antolino",
        "npm" => "210711446",
        "email" => "210711446@students.uajy.ac.id",
        "fakultas" => "Fakultas Teknologi Industri",
        "prodi" => "Informatika"
    ];
    return view('form', $dataForm);
});