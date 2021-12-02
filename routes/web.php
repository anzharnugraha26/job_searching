<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> ['auth','checkRole:admin'] , 'prefix' => 'admin'],function(){
    Route::get('/admin', 'Admin\DashboardController@index');
    Route::get('/input-lowongan' , 'Admin\LowonganController@index');
    //perusahaan
    Route::get('/perusahaan' , 'Admin\PerusahaanController@index');
});
