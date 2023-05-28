<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [IndexController::class, 'dashboard']);
Route::get('/daftar', [BioController::class, 'daftar']);
Route::post('/kirim', [BioController::class, 'kirim']);

Route::get('data-tables', function(){
    return view('page.datatable');
});

//CRUD

// Creat Data
// route untuk mengarahkan ke form tambah kategoti
Route::get('/category/create', [CategoriesController::class, 'create'] );
// route untuk menyimpan data ke db tabel kategoti
Route::post('/category', [CategoriesController::class, 'store']);

// read data 
// route semua data untuk menampilkan data di db 
Route::get('/category', [CategoriesController::class, 'index']);
// route untuk ambil detail data berdasarkan id 
Route::get('/category/{id}', [CategoriesController::class, 'show']);

// update data 
// route untuk mengarah ke form edit kategori dengan membawa data berdasarkan id 
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
// route untuk update kategori berdasarkan id 
Route::put('/category/{id}', [CategoriesController::class, 'update']);

// delete data 
// route untuk hapus data berdasarkan id kategoti 
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);