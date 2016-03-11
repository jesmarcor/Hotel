<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('hotels');
});

Route::get('hotels', 'HotelsController@index');
Route::get('hotels/{hotel}','HotelsController@show')

Route::post('addhotel','HotelsController@store');

Route::get('rooms', 'RoomsController@index');
Route::get('rooms/{room}', 'RoomsController@show');

Route::get('rooms/{room}/edit', 'RoomsController@edit');
Route::patch('rooms/{rooms}', 'RoomsController@update');
Route::delete('rooms/{room}', 'RoomsController@delete');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
