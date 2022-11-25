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

Route::namespace ('App\Http\Controllers')->group(function () {
    Route::get('/', 'SiteController@index');


    Route::get('/about', 'SiteController@about');

    Route::get('/shop', 'SiteController@shop');
<<<<<<< HEAD
    Route::get('/blog', 'SiteController@blog');
=======



    Route::get('/contact', 'SiteController@contact');



>>>>>>> 699409005425b7adc6663a556efe2acb6ab67858

});