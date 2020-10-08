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
Route::get('/', 'CrudController@index')->name('/');
Route::get('crud', 'CrudController@index');
Route::get('tambah', 'CrudController@create');
Route::post('simpan', 'CrudController@store');
Route::delete('hapus/{id}', 'CrudController@destroy');
Route::get('edit/{id}', 'CrudController@edit');
Route::post('simpanedit/{id}', 'CrudController@update');


