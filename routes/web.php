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
// bisa
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'setyo awan prakoso';
//     return view('about', ['nama' => $nama]);
// });

// load controller dari route. NamaController@namaMethod
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

// students
Route::get('/students', 'StudentsController@index');

Route::get('/students/create', 'StudentsController@create');

// id student {student}
Route::get('/students/{student}', 'StudentsController@show');

// create data dengan method post
Route::post('/students', 'StudentsController@store');
