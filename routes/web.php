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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('kuisioner/create-step1', 'KuisionerController@createStep1')->name('kuisioner.createStep1');
Route::post('kuisioner/post-step1', 'KuisionerController@postCreateStep1')->name('kuisioner.postCreateStep1');
