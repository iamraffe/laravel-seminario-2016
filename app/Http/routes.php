<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

  Route::auth();

  Route::get('/home', 'PagesController@index');

  /*

  STATIC

   */

  Route::get('/', "PagesController@index");

  Route::get('/programa', "PagesController@programa");

  Route::get('/premios', "PagesController@premios");

  Route::get('/como-llegar', "PagesController@como_llegar");

  Route::get('/terms-and-conditions', "PagesController@terms_and_conditions");

  /*

  DYNAMIC

   */

  Route::get('/registro', 'RegistrationsController@index');

  Route::post('/handle-registration', 'RegistrationsController@register');

  Route::get('/ponentes', 'SpeakersController@index');

  Route::get('/ponentes/{slug}', 'SpeakersController@show');

  Route::get('/proyectos', 'ProjectsController@index');

  /*
  
  ADMIN AREA - BACKEND ROUTES

   */

  Route::get('admin', ['middleware' => 'auth', 'uses' => 'AdminController@index']);

  Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
  {
    Route::get('exports/excel', 'AdminController@export_excel');
  });

});
