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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/service/digital', 'ServiceController@digital')->name('service.digital');
Route::get('/service/digital/florida', 'ServiceController@florida')->name('service.florida');
Route::get('/service/competitor', 'ServiceController@competitor')->name('service.competitor');
Route::get('/service/discount', 'ServiceController@discount')->name('service.discount');
Route::get('/kassa', 'KassaController@index')->name('kassa');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/es', 'HomeController@es_index')->name('es_home');
Route::get('/es/service/digital', 'ServiceController@es_digital')->name('service.es_digital');
Route::get('/es/service/discount', 'ServiceController@es_discount')->name('service.es_discount');
Route::get('/es/contact', 'ContactController@es_index')->name('es_contact');
