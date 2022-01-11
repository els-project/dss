<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/store', 'KriteriaController@create');
// Route::get('/create', 'KriteriaController@create');
Route::get('/data', 'PegawaiController@index');
Route::get('/alternatif', 'AlternatifController@index');
Route::get('/kriteria', 'KriteriaController@index');
Route::get('/seleksi', 'PegawaiController@seleksi');
Route::post('/hasil', 'PegawaiController@bobot');
Route::get('/hasil', 'PegawaiController@bobot');
Route::get('/form', 'FormController@index');
Route::get('/daftar', 'FormController@daftar');
Route::post('/daftar', 'FormController@daftar');

Route::get('/data-alternatif', 'AlternatifController@index');
Route::get('/data-alternatif/edit/{id}', 'AlternatifController@edit');
Route::post('/data-alternatif/create', 'AlternatifController@create');
Route::post('/data-alternatif/update', 'AlternatifController@update');
Route::post('/data-alternatif/deleted', 'AlternatifController@deleted');

Route::get('/data-kriteria', 'KriteriaController@index');
// Route::get('/data-kriteria/getSubById', 'KriteriaController@getSubById');
 Route::get('/data-kriteria/getSubById/{id}', 'KriteriaController@getSubById');
Route::post('/data-kriteria/create', 'KriteriaController@create');
Route::post('/data-kriteria/update', 'KriteriaController@update');
Route::post('/data-kriteria/deleted', 'KriteriaController@deleted');
Route::post('/data-kriteria/updateSubKriteria', 'KriteriaController@updateSubKriteria');
Route::post('/data-kriteria/deleted', 'KriteriaController@deleted');

Route::get('/data-nilai', 'NilaiController@index');
Route::post('/data-nilai/create', 'NilaiController@create');
Route::post('/data-nilai/update', 'KriteriaController@update');
Route::post('/data-nilai/deleted', 'KriteriaController@deleted');

Route::get('/rangking', 'RangkingController@index');

Route::get('hitung', 'PerhitunganController@index')->name('perhitungan');
Route::post('/daftar', 'RegisController@daftar');
Route::get('/regis', 'RegisController@index');
Route::get('/visi', 'VisiController@index');
Route::get('/galeri', 'GaleriController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/landing', 'LandingController@index');