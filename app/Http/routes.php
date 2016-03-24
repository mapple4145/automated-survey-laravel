<?php

use Illuminate\Http\RedirectResponse;

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

Route::get(
    '/survey/{survey}/results',
    ['as' => 'survey.results', 'uses' => 'SurveyController@showResults']
);
Route::get(
    '/',
    ['as' => 'root', 'uses' => 'SurveyController@showFirstSurveyResults']
);
Route::post(
    '/voice/connect',
    ['as' => 'voice.connect', 'uses' => 'SurveyController@connectVoice']
);
Route::post(
    '/sms/connect',
    ['as' => 'sms.connect', 'uses' => 'SurveyController@connectSms']
);
Route::get(
    '/survey/{id}/voice',
    ['as' => 'survey.show.voice', 'uses' => 'SurveyController@showVoice']
);
Route::get(
    '/survey/{id}/sms',
    ['as' => 'survey.show.sms', 'uses' => 'SurveyController@showSms']
);
Route::get(
    '/survey/{survey}/question/{question}/voice',
    ['as' => 'question.show.voice', 'uses' => 'QuestionController@showVoice']
);
Route::get(
    '/survey/{survey}/question/{question}/sms',
    ['as' => 'question.show.sms', 'uses' => 'QuestionController@showSms']
);
Route::resource(
    'question.question_response', 'QuestionResponseController',
    ['only' => ['store']]
);
