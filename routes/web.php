<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
    

Route::get('/', function () {
    return view('welcome');
});

route :: get('/hello', function () {
    return 'Hello World';
});

Route::get('/mahasiswa/{merk}', function ($merk) {
    return "tampilkan data mahasiswa bernama $merk";
});

Route::get('/stok_barang/{nama_barang}/{merk?}', function ($nama_barang, $merk = 'samsung') {
    return "cek sisa stok untuk : $nama_barang $merk";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan User dengan id = $id";
})->where('id', '([A-Za-z]{2}[0-9]+|[0-9]+)');

Route::resource('posts', PostController::class);

