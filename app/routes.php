<?php


Route::get('/', function()
{
	return View::make('home');
});

Route::get('mood', ['as' => 'moods.index', 'uses' => 'MoodController@index']);
Route::post('mood', 'MoodController@store')->before('csrf');

