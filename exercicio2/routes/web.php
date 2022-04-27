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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('owners', 'OwnerController@index');
Route::get('owners/{owner}', 'OwnerController@show');

Route::get('countries', 'CountryController@index');
Route::get('countries/{country}', 'CountryController@show');

Route::get('brands', 'BrandController@index');
Route::get('brands/{brand}', 'BrandController@show');

Route::get('cars', 'CarController@index');
Route::get('cars/{car}', 'CarController@show');
