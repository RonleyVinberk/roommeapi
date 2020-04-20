<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/readme', 'ReadmeController@index');

Route::group(['prefix' => 'example/api/general'], function () {
    Route::get('login', 'LoginController@index');
});

Route::group(['prefix' => 'example/api/master_data'], function () {
    Route::get('buildings', 'BuildingController@index');
    Route::get('users', 'UserController@index');
    Route::get('rooms', 'RoomController@index');
    Route::get('other_errors', 'OtherErrorController@index');
});
