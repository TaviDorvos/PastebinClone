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
Route::get('/', function() {
    return view('welcome');
});

Route::get('/new-paste', [
    'uses' => 'App\Http\Controllers\PastebinController@create'
]);

Route::post('/new-paste', [
    'uses' => 'App\Http\Controllers\PastebinController@store',
    'as' => 'new-paste.store'
]);

Route::get('/confirmation', function() {
    return view('submit-confirm');
});