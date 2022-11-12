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

Route::get('name','MyPlaceController@index');

Route::get('posts','PostController@index');

Route::get('age','MyAgeController@index');

Route::get('cats','MyCatsController@index');

Route::get('city','MyCityController@index');

Route::get('country','MyCountryController@index');

Route::get('dogs','MyDogsController@index');

Route::get('street','MyStreetController@index');

Route::get('wife','MyWifeController@index');

Route::get('village','MyVillageController@index');
