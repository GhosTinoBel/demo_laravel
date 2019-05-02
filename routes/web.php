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

Route::get('/a_propos', 'AboutController@read');

Route::get('/contact', [
    'as' => 'contact_path', 
    'uses' => 'ContactController@create' 
]);

Route::post('/contact', [
    'as' => 'contact_path', 
    'uses' => 'ContactController@store' 
]);

Route::get('/se_connecter', 'SeConnecterController@connect');

Route::get('/redirection', function () {
    return redirect('/read');
});