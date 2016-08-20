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
Route::get('/', ['as' => 'home',
    'uses' => 'WelcomeController@index'
    ]);

Route::resource('lists', 'ListsController');

Route::get('contact', ['as' => 'contact',
    'uses' => 'AboutController@create'
    ]);

Route::post('contact', ['as' => 'contact_store',
    'uses' => 'AboutController@store']);

get('auth/register', 'Auth\AuthController@getRegister');
post('auth/register', 'Auth\AuthController@postRegister');


get('auth/login', 'Auth\AuthController@getLogin');
post('auth/login', 'Auth\AuthController@postLogin');
