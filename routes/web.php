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

    Route::get('/shop', 'SiteController@shop');
    Route::get('/about', 'SiteController@about');
    // Route::get('/latest');   案例不做動，保持html #連結 即可
        Route::redirect('/pdt_list', url('/shop'), 302); //Redirect 301 (永久)、 302 (暫時) Default 302
        Route::get('/pdt_details', 'SiteController@pdtDetails');
    Route::get('/blog', 'SiteController@blog');

    Route::get('/contact', 'SiteController@contact');

});