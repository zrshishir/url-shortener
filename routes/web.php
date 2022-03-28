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

Route::get('generate-shorten-url', 'ShortenUrlController@index');
Route::post('generate-shorten-url', 'ShortenUrlController@store')->name('generate.shorten.url.post');

Route::get('{code}', 'ShortLinkController@shortenLink')->name('shorten.url');
