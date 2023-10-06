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
    return view('welcome');
});
Route::get('/proyect1', function () {
    return view('lista_blade.proyect1');
});
Route::get('/proyect2', function () {
    return view('lista_blade.proyect2');
});
Route::get('/proyect3', function () {
    return view('lista_blade.proyect3');
});
Route::get('/proyect4', function () {
    return view('lista_blade.proyect4');
});
Route::get('/proyect5', function () {
    return view('lista_blade.proyect5');
});

