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

Route::get('/', function(){
	return view('index.home'); 
});
Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('about/', 'AboutController@index');
Route::get('pengguna/', 'PenggunaController@index');

Route::group(['middleware' => 'auth'], function(){
Route::get('index_admin/', 'IndexAdminController@index');
Route::post('/index_admin/create', 'IndexAdminController@create');
Route::get('/index_admin/{id_siswa}/edit', 'IndexAdminController@edit');
Route::post('/index_admin/{id_siswa}/update', 'IndexAdminController@update');
Route::get('/index_admin/{id_siswa}/delete', 'IndexAdminController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
