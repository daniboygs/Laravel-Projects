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

Route::group(['prefix' => 'books'], function () {
    Route::get('/', 'BookController@index');
    Route::post('/','BookController@create');
    Route::put('/{id}','BookController@update');
    Route::delete('/{id}','BookController@destroy');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'CategoryController@index');
    Route::get('/{id}', 'CategoryController@getCategory');
    Route::post('/','CategoryController@create');
    Route::put('/{id}','CategoryController@update');
    Route::delete('/{id}','CategoryController@destroy');
});

Route::group(['prefix' => 'borrows'], function () {
    Route::get('/', 'BorrowController@index');
    Route::get('/{id}', 'BorrowController@getBorrow');
    Route::post('/','BorrowController@create');
    Route::put('/{id}','BorrowController@update');
    Route::delete('/{id}','BorrowController@destroy');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index');
    Route::get('/{id}', 'UserController@getUser');
    Route::post('/','UserController@create');
    Route::put('/{id}','UserController@update');
    Route::delete('/{id}','UserController@destroy');
});



