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

Route::group(['middleware' => ['auth'], 'as' => 'dashboard.', 'prefix' => 'dashboard', 'namespace' => 'Dashboard'], static function () {
	Route::get('/', ['as' => 'home', 'uses' => '']);
});
