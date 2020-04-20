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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('login', 'API\LoginController@login');
 
Route::group(['middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'master_data'], function () {
        // Only Admin Building and Superadmin can access building page
        Route::group(['middleware' => 'building.middleware'], function () {
            /* [Module Buildings] */
            Route::get('buildings', 'API\BuildingController@index');
            Route::get('buildings/{slug}', 'API\BuildingController@show');

            Route::post('buildings', 'API\BuildingController@store');
            Route::put('buildings/{building_id}', 'API\BuildingController@update');
            Route::delete('buildings/{building_id}', 'API\BuildingController@destroy');
            
            /* [Module Rooms] */
            // GET [Module Rooms]
            Route::get('buildings/{building_id}/rooms', 'API\RoomController@index');
            Route::get('buildings/{building_id}/rooms/{room_id}', 'API\RoomController@show');
            
            // POST [Module Rooms]
            Route::post('buildings/{building_id}/rooms', 'API\RoomController@store');
            Route::put('buildings/{building_id}/rooms/{room_id}', 'API\RoomController@update');
            
            // DELETE [Module Rooms]
            Route::delete('buildings/{building_id}/rooms/{room_id}', 'API\RoomController@destroy');
        });
        
        // Only Superadmin can access page user
        Route::group(['middleware' => 'authorization.superadmin'], function () {
            /* [Module Users] */
            Route::get('users', 'API\UserController@index');
            Route::get('users/{user_id}', 'API\UserController@show');
            Route::post('users', 'API\UserController@register');
            Route::put('users/{user_id}', 'API\UserController@update');
            Route::delete('users/{user_id}', 'API\UserController@destroy');
        });
    });
});


