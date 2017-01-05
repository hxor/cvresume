<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@index');
Route::get('portfolio/{portfolio}', 'IndexController@getPortfolio')->name('portfolio');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'backend', 'middleware' => ['auth'], 'namespace' => 'Backend'], function(){
    Route::get('/', ['as' => 'backend', 'uses' => 'BackendController@index']);
    Route::resource('/profile', 'ProfileController', ['names' => 'admin.profile']);
    Route::resource('/education', 'EducationController', ['names' => 'admin.education']);
    Route::resource('/experience', 'ExperienceController', ['names' => 'admin.exp']);
    Route::resource('/portfolio', 'PortfolioController', ['names' => 'admin.port']);
    Route::resource('/testimoni', 'TestimoniController', ['names' => 'admin.testi']);
});
