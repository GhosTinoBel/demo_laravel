<?php
use App\Mail\ContactMessageCreated;
use App\Http\Controllers\PageAdmin;

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

//  route de la page d'accueil
Route::get('/', [
    'as' => 'root_path',
    'uses' => 'WelcomeController@index'
]);

// route de la page a propos
Route::get('/a_propos', 'AboutController@read');

// essai de la redirection sur la page a propos
Route::get('/redirection', function () {
    return redirect('/read');
});

// route de la page de contact
Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@create'
]);

// reception des données du formulaire de contact
Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);

// route de la page de connection
Route::get('/ajouter_utilisateur', 'AjouterUtilisateurController@enregistrer');

// reception des données de la page de connection
Route::post('/ajouter_utilisateur', [
    'as' => 'ajouter_utilisateur_path',
    'uses' => 'AjouterUtilisateurController@enregistrer'
]);

// acceder à la page administrateur
Route::get('/admin', [
    'as' => 'admin_path',
    'uses' => 'PageAdminController@index'
]);

Route::post('/admin', [
    'as' => 'admin_path',
    'uses' => 'PageAdminController@delete'
]);

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
