<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [UsersController::class, 'index']);
//Route::resource('/user','UsersController@index');

Route::resource('/user','UsersController@index');

Route::get('/create', function () {
    return view('create');
});



Route::get('/home', function () {
    return view('home');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/show', function () {
    return view('create.users');
});

Route::get('users', function () {
    return '<h1>Users! 55555</h1>';
});

Route::get('showname', function () {
    return '<h1>Hello Laravel</h1>';
});

// Route::get('showname/{name}','HelloController@showHello');

// Route::get('show','HelloController@show');

// Route::get('showproduct/{product}','HelloController@showresultProduct');

// Route::get('/show','HelloController@show');
