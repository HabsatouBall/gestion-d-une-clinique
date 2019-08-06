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

Route::get('/index', function () {
    return view('pages/index');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/agenda', function () {
    return view('pages/agenda');
});

Route::get('/admin', function () {
    return view('pages/admin');
});

Route::get('/', function () {
    return view('login');
});
Route::post('/auth', 'LoginController@login');
/*
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');


Route::get('/jj', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Acceuil');
});

Route::get('/actualites', function () {
    return view('actualites');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/contact', function () {
    return view('contact');
});
*/