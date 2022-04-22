<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'states'], function()
{
    Route::get('/{countryId}', 'StateController@loadStates');
});

Route::group(['prefix' => 'cities'], function()
{
    Route::get('/{stateId}', 'CityController@loadCities');
});