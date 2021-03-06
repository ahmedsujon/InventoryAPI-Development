<?php

Route::apiResource('class', 'Api\ClasseController');
Route::apiResource('subject', 'Api\SubjectController');
Route::apiResource('section', 'Api\SectionController');
Route::apiResource('student', 'Api\StudentController');

// use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});