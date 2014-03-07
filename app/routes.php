<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getHome'));
Route::get('about', array('as' => 'about', 'uses' => 'AboutController@getAbout'));
Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@getContact'));
Route::get('projects', array('as' => 'projects', 'uses' => 'ProjectsController@getProjects'));
Route::get('404', 'Error404Controller@get404');

//Form request:: POST action will trigger to controller
Route::post('contact_request',array('as' => 'contact.request', 'uses' => 'ContactController@getContactUsForm' ));
