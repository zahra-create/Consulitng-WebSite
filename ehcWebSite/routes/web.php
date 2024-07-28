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
    return view('welcome');
});

Route::get('/service-etudiant', function () {
    return view('service-etudiant');
})->name('service-etudiant');

Route::get('/service-fonctionnaire', function () {
    return view('service-fonctionnaire');
})->name('service-fonctionnaire');

Route::get('/service-entreprise', function () {
    return view('service-entreprise');
})->name('service-entreprise');
