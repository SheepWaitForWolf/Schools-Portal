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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [
    'as' => 'api.search',
    'uses' => 'Api\SearchController@search'
]);

Route::get('/about', function () {
	return view('about');
});

Route::get('/help', function () {
	return view('help');
});

Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));


/*
|--------------------------------------------------------------------------
| Services GET Routes
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
	return view('home');
});

Route::get('/registration/{child_id?}', ['uses'=>'ServicesController@getRegistrationPage','as'=>'get.services.getRegistrationPage']);

Route::get('/absence/{absence_id?}', ['uses'=>'ServicesController@getAbsencePage','as'=>'get.services.getAbsencePage']);

Route::get('/enrol/{enrol_id?}', ['uses'=>'ServicesController@getEnrolmentPage','as'=>'get.services.getEnrolmentPage']);

Route::get('/absence', ['uses'=>'ServicesController@getAbsencePage','as'=>'get.services.getAbsencePage']);

Route::get('/annualupdate', ['uses'=>'ServicesController@getAnnualUpdatePage','as'=>'get.services.showAnnualUpdatePage']);

Route::get('/results', ['uses'=>'ServicesController@getResultsPage','as'=>'get.services.showResultsPage']);

Route::get('/schoolmeals', ['uses'=>'ServicesController@getSchoolMealsPage','as'=>'get.services.showSchoolMealsPage']);
