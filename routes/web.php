<?php

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
    return view('Pagina1');
})->name('PaginaPrincipal');

Route::get('/Pagina2', function () {
    return view('Pagina2');
})->name('Ayuda');
Route::get('/Pagina3', function () {
    return view('Pagina3');
})->name('Ofertas');

