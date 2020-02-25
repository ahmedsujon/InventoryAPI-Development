<?php

Route::apiResource('class', 'Api\ClasseController');
Route::apiResource('subject', 'Api\SubjectController');

// use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });