<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Bin;

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
    return view("welcome");
});

//Registration
Route::get('/register', [
    'uses' => 'App\Http\Controllers\RegistrationController@create'
]);

Route::post('/register', [
    'uses' => 'App\Http\Controllers\RegistrationController@store',
    'as' => 'register-page.store'
]);
//

//Login
Route::get('/login', [
    'uses' => 'App\Http\Controllers\LoginController@create'
]);

Route::post('/login', [
    'uses' => 'App\Http\Controllers\LoginController@store',
    'as' => 'login-page.store'
]);
//

//Log out function
Route::get('/logout', 'App\Http\Controllers\LoginController@destroy');

//Creating the new bin page
Route::get('/new-bin', [
    'uses' => 'App\Http\Controllers\PastebinController@create'
]);

Route::post('/new-bin', [
    'uses' => 'App\Http\Controllers\PastebinController@store',
    'as' => 'new-bin.store'
]);
//

//Confirmation after the form completed
Route::get('/confirmation', function () {
    return view('bins.confirmation');
});

//Get the view of the bins list
Route::get('bins', 'App\Http\Controllers\PastebinController@binsList');

//get the view of the bin with the specific id (single bin view)
Route::get('bins/{id}', 'App\Http\Controllers\PastebinController@showBin'); 
