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
<<<<<<< HEAD
|Update durch ATOM und so

jetzt schauen wir mal
*/

Route::get('/', 'DomainController@index');

Route::post('/domainCheck', 'DomainController@domainCheck');


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
=======
*/

Route::get('/', function () {
    return view('welcome');
>>>>>>> 9a3c2413b4aa813e364847f1f64f2d65fe61a1cc
});
