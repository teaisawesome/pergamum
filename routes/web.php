<?php

use Illuminate\Support\Facades\Route;
use App\Vendor;

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

Route::get('/profile', 'ProfileController@profile');

Route::post('/profile/modify', 'ProfileController@modify');


Route::get('/products', 'ProductController@index');

Route::get('/products/{id}/edit', 'ProductController@edit');

Route::get('/products/create', 'ProductController@create');

Route::post('/products/createbook', 'ProductController@createNewBook');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
