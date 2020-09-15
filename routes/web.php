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
// Route::get('/students', 'StudentsController@index');

// // create untuk nampilin form 
// Route::get('/students/create', 'StudentsController@create');

// // id student == {student}
// Route::get('/students/{student}', 'StudentsController@show');

// // create data dengan method post, store untuk mengubah data 
// Route::post('/students', 'StudentsController@store');

// // delete data dengan method delete
// Route::delete('/students/{student}', 'StudentsController@destroy');

// // edit data, klik tombol itu get. edit untuk nampilin form
// Route::get('/students/{student}/edit', 'StudentsController@edit');

// // update untuk mengubah data
// Route::patch('/students/{student}', 'StudentsController@update');

// setelah di cek di reaource, php artisan route:list maka dapat diganti dengan:
Route::resource('students', 'StudentsController');
