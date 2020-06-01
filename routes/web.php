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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
// mahasiswa
Route::get('/mahasiswa','MahasiswaController@index');
// students
Route::get('/students','StudentsController@index');
// Route to view form tambah data
Route::get('/students/create','StudentsController@create');
// Route to view details students
Route::get('/students/{student}','StudentsController@show');
// Route untuk mengelolahh hasil inputan form
Route::post('/students','StudentsController@store');
