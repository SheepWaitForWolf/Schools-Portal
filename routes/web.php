<?php

use App\Mail\AccountCreated;

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

// Route::get('/search', [ 
//     'as' => 'api.search',
//     'uses' => 'Api\SearchController@search'
// ]);

Route::get('/about', function () {
	return view('about');
});

Route::get('/accessibility', function () {
	return view('accessibility');
});

Route::get('/help', function () {
	return view('help');
});

Route::get('/schoolmeals', function () {
	return view('schoolmeals');
});

Route::get('/annualupdate', function () {
	return view('annualupdate');
});

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@logout'));
Auth::routes();

/*
|--------------------------------------------------------------------------
| Services GET Routes
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
	return view('home');
});

Route::get('/attendance', function () {
	return view('attendance');
});

Route::get('/registration/{child_id?}', ['uses'=>'ServicesController@getChildren','as'=>'get.services.getChildren']);

Route::get('/absence/{absence_id?}', ['uses'=>'ServicesController@getAbsencePage','as'=>'get.services.getAbsencePage']);

Route::get('/enrol/{enrol_id?}', ['uses'=>'ServicesController@getEnrolmentPage','as'=>'get.services.getEnrolmentPage']);

Route::get('/absence', ['uses'=>'ServicesController@getAbsencePage','as'=>'get.services.getAbsencePage']);



Route::get('/annualupdate', ['uses'=>'ServicesController@getAnnualUpdatePage','as'=>'get.services.showAnnualUpdatePage']);


Route::get('/schoolmeals', ['uses'=>'ServicesController@getSchoolMealsPage','as'=>'get.services.showSchoolMealsPage']);

Route::get('/getschools', ['uses'=>'ServicesController@getSchools', 'as'=>'get.services.getSchools']);


/*
|--------------------------------------------------------------------------
| Services POST Routes
|--------------------------------------------------------------------------
*/
Route::post('/registration/addchild/{child_id?}', ['uses'=>'ServicesController@postChildren','as'=>'post.services.postChildren']);

Route::post('/enrol/{enrol_id?}', ['uses'=>'ServicesController@postEnrolmentPage','as'=>'post.services.postEnrolmentPage']);

Route::post('/absence/{absence_id?}', ['uses'=>'ServicesController@postAbsencePage','as'=>'post.services.postAbsencePage']);

Route::post('/feedback', ['uses'=>'ServicesController@postFeedbackPage','as'=>'post.services.postFeedbackPage']);

Route::get('/feedback/{feedback_id?}', ['uses'=>'ServicesController@getfeedbackPage','as'=>'get.services.getFeedbackPage']);

Route::put('/feedback/{feedback_id?}', ['uses'=>'ServicesController@updateFeedbackPage','as'=>'put.services.updateFeedbackPage']);

Route::post('/registration/{child_id?}', ['uses'=>'ServicesController@updateChildren','as'=>'post.services.updateChildren']);



/*
|--------------------------------------------------------------------------
| Services DELETE Routes
|--------------------------------------------------------------------------
*/

Route::delete('registration/{child_id?}', ['uses'=>'ServicesController@deleteChild','as'=>'delete.services.deleteChild']);

Route::delete('feedback/{feedback_id?}', ['uses'=>'ServicesController@deleteFeedbackPage','as'=>'delete.services.deleteFeedbackPage']);

Route::delete('absence/{absence_id?}', ['uses'=>'ServicesController@deleteAbsencePage','as'=>'delete.services.deleteAbsencePage']);

Route::delete('enrol/{enrol_id?}', ['uses'=>'ServicesController@deleteEnrolmentPage','as'=>'delete.services.deleteEnrolmentPage']);

/*
|--------------------------------------------------------------------------
| SimpleSAML based Routes
|--------------------------------------------------------------------------
*/

// Route::get('/userhome',['uses'=>'SimpleSAMLPHPController@getUserData','as'=>'get.simplesamlphp.userdata']);


Route::get('/mailbox', function () {
	return view('mailbox.mailbox');
});

Route::get('/compose', function () {
	return view('mailbox.compose');
});

Route::get('/readmail', function () {
	return view('mailbox.readmail');
});

Route::get('/outbox', function () {
	return view('mailbox.outbox');
});
Route::get('/newaccount', function () {
    // send an email to myself
    Mail::to('dglennie89@gmail.com')->send(new AccountCreated);

    return view('welcome');
});


Route::get('/home', 'HomeController@index');
