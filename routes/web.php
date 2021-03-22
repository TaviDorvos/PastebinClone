<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Route::get('bins', function () {
    $bins = DB::table('bins')->get();
    
    return view('bins.bins-list', ['bins' => $bins]);
});

Route::get('bins/{id}', function ($id) {
    
    $bin = DB::table('bins')->find($id);
    
    return view('bins.show-bin', ['bin' => $bin]);
});
