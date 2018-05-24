<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::get('news', 'NewsController@index');
Route::get('news/topic/{id}', 'NewsController@show_topic');
Route::get('news/filter/{status}', 'NewsController@filter');
Route::get('news/{id}', 'NewsController@show');
Route::post('news', 'NewsController@store');
Route::post('news/{id}', 'NewsController@update');
Route::delete('news/{id}', 'NewsController@destroy');

Route::get('topic', 'TopicController@index');
Route::get('topic/news/{id}', 'TopicController@show_news');
Route::get('topic/{id}', 'TopicController@show');
Route::post('topic', 'TopicController@store');
Route::post('topic/{id}', 'TopicController@update');
Route::delete('topic/{id}', 'TopicController@destroy');

Route::get('newstopic', 'NewsTopicController@index');
Route::get('newstopic/news/{id}', 'NewsTopicController@show_news');
Route::get('newstopic/{id}', 'NewsTopicController@show');
Route::post('newstopic', 'NewsTopicController@store');
Route::post('newstopic/{id}', 'NewsTopicController@update');
Route::delete('newstopic/{id}', 'NewsTopicController@destroy');

