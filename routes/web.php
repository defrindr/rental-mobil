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

// * Default
// Route::get('/', function () {
//     return vie2w('layouts.layout');
// });
Route::get('/{vue_capture}','defaultController@index')->where('vue_capture', 'daftar-mobil|about||');
// Route::get('/view/{vue_capture}',function(){
//     return view('default.layout');
// })->where('vue_capture', '[\/\w\.-]*');

// * Auth
Route::get('/login','Auth\LoginController@loginForm')->name('loginForm');
Route::post('/login','Auth\LoginController@login')->name('function_login');
Route::get('/logout','Auth\LoginController@logout')->name('log_out');


// * Home Page Admin
Route::get('/admin','Auth\LoginController@index')->name('dashboard')->middleware('auth');



// * admin Route
Route::prefix('admin')->group(function(){
    // * Mobil
    Route::get('mobil/','mobilController@index')
                ->name('mobil_index')
                ->middleware('auth');
    Route::redirect('mobil/index','/admin/mobil');
    Route::get('mobil/create','mobilController@create')
                ->name('mobil_create')
                ->middleware('auth');
    Route::post('mobil/create','mobilController@store')
                ->middleware('auth')
                ->name('mobil_store');
    Route::get('mobil/show/{id}','mobilController@show')
                ->middleware('auth')
                ->name('mobil_show');
    Route::get('mobil/edit/{id}','mobilController@edit')
                ->middleware('auth')
                ->name('mobil_edit');
    Route::put('mobil/edit/{id}','mobilController@update')
                ->middleware('auth')
                ->name('mobil_update');
    Route::delete('mobil/{id}', 'mobilController@destroy')
                ->middleware('auth')
                ->name('mobil_destroy');



    // * User
    Route::get('user/','adminController@index')
                ->middleware('auth')
                ->middleware('email')
                ->name('user_index');
    Route::redirect('user/index','/admin/user/');
    Route::get('user/create','adminController@create')
                ->name('user_create')
                ->middleware('email')
                ->middleware('auth');
    Route::post('user/create','adminController@store')
                ->middleware('auth')
                ->middleware('email')
                ->name('user_store');
    Route::get('user/edit/{id}','adminController@edit')
                ->middleware('auth')
                ->middleware('email')
                ->name('user_edit');
    Route::put('user/edit/{id}','adminController@update')
                ->middleware('auth')
                ->middleware('email')
                ->name('user_update');
    Route::delete('user/{id}', 'adminController@destroy')
                ->middleware('auth')
                ->middleware('email')
                ->name('user_destroy');
    Route::get('user/show/{id}', 'adminController@show')
                ->middleware('auth')
                ->middleware('email')
                ->name('user_show');



    // * Costumer
    Route::get('costumer/','costumersController@index')
                ->middleware('auth')
                ->name('costumer_index');
    Route::redirect('costumer/index','/admin/costumer/');
    Route::get('costumer/create','costumersController@create')
                ->name('costumer_create')
                ->middleware('auth');
    Route::post('costumer/create','costumersController@store')
                ->middleware('auth')
                ->name('costumer_store');
    Route::get('costumer/edit/{id}','costumersController@edit')
                ->middleware('auth')
                ->name('costumer_edit');
    Route::put('costumer/edit/{id}','costumersController@update')
                ->middleware('auth')
                ->name('costumer_update');
    Route::delete('costumer/{id}', 'costumersController@destroy')
                ->middleware('auth')
                ->name('costumer_destroy');
    Route::get('costumer/show/{id}','costumersController@show')
                ->middleware('auth')
                ->name('costumer_show');


    // * pinjam
    Route::get('pinjam/','pinjamController@index')
                ->middleware('auth')
                ->name('pinjam_index');
    Route::redirect('pinjam/index','/admin/pinjam/');
    Route::get('pinjam/create','pinjamController@create')
                ->middleware('auth')
                ->name('pinjam_create');
    Route::post('pinjam/create','pinjamController@store')
                ->middleware('auth')
                ->name('pinjam_store');
    Route::get('pinjam/edit/{id}','pinjamController@edit')
                ->middleware('auth')
                ->name('pinjam_edit');
    Route::put('pinjam/update/{id}','pinjamController@update')
                ->middleware('auth')
                ->name('pinjam_update');
    Route::delete('pinjam/{id}', 'pinjamController@destroy')
                ->middleware('auth')
                ->name('pinjam_destroy');
    Route::put('pinjam/kembali/{id}','pinjamController@kembali')
                ->middleware('auth')
                ->name('pinjam_kembali');
    Route::get('pinjam/cetak','pinjamController@cetakAll')
                ->middleware('auth')
                ->name('pinjam_cetak_all');
            });