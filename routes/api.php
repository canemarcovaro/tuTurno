<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('markets','MarketController@create')->name('createMarkets');

Route::get('markets','MarketController@index')->name('indexMarkets');



Route::post('categories','CategoryController@create')->name('createCategories');

Route::get('categories/{id}','CategoryController@index')->name('indexCategories');


Route::post('servers','ServerController@create')->name('createServers');


Route::post('turns','TurnController@create')->name('createTurns');
Route::put('turns/{id}','TurnController@edit')->name('editTurns');


Route::resource('photo','PhotoController');