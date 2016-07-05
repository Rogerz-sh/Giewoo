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

//Route::group(['middleware' => 'agent'], function () {
    Route::get('/', 'PageController@getIndex');

    Route::controller('site', 'SiteController');

    Route::controller('page', 'PageController');

    Route::get('/research/{id?}', 'PageController@getResearch');

    Route::get('/dynamic/{id?}', 'PageController@getDynamic');

    Route::get('/job/{id?}', 'PageController@getJob');

    Route::get('/jobs/{id?}', 'PageController@getJobList');

    Route::get('/job/{id}', 'PageController@getJobView');

    Route::get('/examples', 'PageController@getExampleList');

    Route::get('/example/{id}', 'PageController@getExampleView');

//});

//Route::group(['prefix' => 'user'], function () {
//
//    Route::get('/', function () {
//        return view('user.index');
//    });
//
//    Route::get('login', 'UserController@login');
//
//    Route::get('{id}', 'UserController@index');
//
//});

Route::controller('user', 'UserController');

Route::controller('account', 'AccountController');

Route::controller('system', 'SystemController');


Route::group(['middleware' => 'login'], function () {

    Route::controller('enterprise', 'EnterpriseController');

    Route::controller('job', 'JobController');

    Route::controller('resume', 'ResumeController');

    Route::controller('meeting', 'MeetingController');

    Route::controller('search', 'SearchController');

});

Route::group(['middleware' => 'manager'], function () {

    Route::controller('manager', 'ManagerController');

    Route::controller('virtual-job', 'VirtualJobController');

    Route::controller('article', 'ArticleController');

    Route::controller('example1', 'ExampleController');

    Route::controller('message', 'MessageController');

});
