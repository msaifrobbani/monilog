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

Route::get('/', function ()
{
    return view('index');
})->name('home');

Route::get('/logistik', 'LogistikController@index')->name('logistik');
Route::get('/logistik/input', 'LogistikController@create')->name('input-logistik');
Route::post('/logistik', 'LogistikController@store');
Route::get('/logistik/{id}/delete', 'LogistikController@destroy');
Route::get('/logistik/{id}/update', 'LogistikController@edit');
Route::post('/logistik/{id}/update', 'LogistikController@update');

Route::get('/purchaser', 'PurchaserController@index')->name('purchaser');
Route::get('/purchaser/input', 'PurchaserController@create')->name('input-purchaser');
Route::post('/purchaser', 'PurchaserController@store');
Route::get('/purchaser/{id}/delete', 'PurchaserController@destroy');
Route::get('/purchaser/{id}/update', 'PurchaserController@edit');
Route::post('/purchaser/{id}/update', 'PurchaserController@update');

Route::get('/material', 'MaterialController@index')->name('material');
Route::get('/material/input', 'MaterialController@create')->name('input-material');
Route::post('/material', 'MaterialController@store');
Route::get('/material/{id}/delete', 'MaterialController@destroy');
Route::get('/material/{id}/update', 'MaterialController@edit');
Route::post('/material/{id}/update', 'MaterialController@update');