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
use Modules\Club\Http\Controllers\UserController;

Route::prefix('club')->group(function() {
    Route::get('/', 'ClubController@index');
    Route::Resource('roles', 'roleController');
    Route::Resource('sportTypes','sportTypeController');
    Route::Resource('users',UserController::class);
    Route::Resource('players','playerController');
    Route::Resource('teams','TeamController');
    Route::Resource('sportsProperty','sportsPropertyController');
    Route::Resource('sportsPropertiesValue','sportsPropertiesValueController');
//    Route::Resource('/setting','settingController');
});

