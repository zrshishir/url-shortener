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

Route::get('generate-shorten-url', 'App\Http\Controllers\ShortenUrlController@index');
Route::post('generate-shorten-url', 'App\Http\Controllers\ShortenUrlController@store')->name('generate.shorten.url.post');

Route::get('{code}', 'App\Http\Controllers\ShortenUrlController@shortenUrl')->name('shorten.url');
