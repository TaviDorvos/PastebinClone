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

//Registration
Route::get('/', [
    'uses' => 'App\Http\Controllers\RegistrationController@create'
]);

Route::post('/', [
    'uses' => 'App\Http\Controllers\RegistrationController@store',
    'as' => 'register-page.store'
]);
//

Route::get('/login', function () {
    return view('login-page');
});

//Creating the new bin
Route::get('/new-paste', [
    'uses' => 'App\Http\Controllers\PastebinController@create'
]);

Route::post('/new-paste', [
    'uses' => 'App\Http\Controllers\PastebinController@store',
    'as' => 'new-paste.store'
]);
//

//Confirmation after the form completed
Route::get('/confirmation', function () {
    return view('confirmation');
});
