<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('logos-desde-cero', 'WelcomeController@logosDesdeCero');
Route::get('acuarela-basica', 'WelcomeController@acuarelaBasica');
Route::get('behance-reviews', 'WelcomeController@behanceReviews');
Route::get('paco-calles-fabrica-de-letras', 'WelcomeController@pacoCalles');
Route::get('paco-calles-disenando-disenadores', 'WelcomeController@designingdesigners');
// Route::get('haku', 'WelcomeController@haku');
// Route::get('acuarela-marisa-parga', 'WelcomeController@acuarelaMarisa');

Route::post('sendmail', 'PagesController@sendmail2');