<?php

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
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/pegawai', 'keloladataController@pegawai');
Route::get('/pangkat', 'keloladataController@pangkat');
Route::get('/kecamatan', 'keloladataController@kecamatan');
Route::get('/dasarsurat', 'keloladataController@dasarsurat');
Route::get('/tujuansurat', 'keloladataController@tujuansurat');
Route::get('/tingkatbiaya', 'keloladataController@tingkatbiaya');
Route::get('/transportasi', 'keloladataController@transportasi');
Route::get('/user', 'keloladataController@user');
Route::get('/spt', 'sptController@index');
Route::get('/sppd', 'sppdController@index');
Route::get('/buatspt', 'sptController@buatspt');
Route::get('/buatsppd', 'sppdController@buatsppd');
Route::get('/buatpengguna', 'penggunaController@buatpengguna');