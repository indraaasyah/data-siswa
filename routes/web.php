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

Route::get('/','SiteController@home');
Route::get('/register','SiteController@register');
Route::post('/postregister','SiteController@postregister');
// Route::get('/about','SiteController@about');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkrole:admin']],function(){
    Route::get('/siswa','SiswaController@index');
    Route::post('/siswa/create','SiswaController@create');
    Route::get('/siswa/{siswa}/edit','SiswaController@edit');
    Route::post('/siswa/{siswa}/update','SiswaController@update');
    Route::get('/siswa/{siswa}/delete','SiswaController@delete');
    // Route::get('/siswa/{id}/profile','SiswaController@profile');
    Route::get('/siswa/{siswa}/profile','SiswaController@profile');
    Route::post('/siswa/{siswa}/addnilai','SiswaController@addnilai');
    Route::get('/siswa/{id}/{idmapel}/deletenilai','SiswaController@deletenilai');
    Route::get('/siswa/exportExcel','SiswaController@exportExcel');
    Route::get('/siswa/exportPdf','SiswaController@exportPdf');
    Route::get('/guru','GuruController@index');
    Route::get('/guru/{id}/profile','GuruController@profile');
});

Route::group(['middleware' => ['auth','checkrole:admin,siswa']],function(){
    Route::get('/dashboard','DashboardController@index');
    // Route::get('/dashboard','DashboardController@show');
});
