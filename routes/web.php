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

Route::get('/', 'WelcomeController@index');

Route::get('/a_propos', 'AboutController@index');

Route::get('/inscrire', 'InscrireController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/redirection', function () {
    return redirect('/a_propos');
});