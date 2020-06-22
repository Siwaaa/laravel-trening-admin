<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'TasksController@index');
// contrillers - нужны для хранения логики роутев
// Route::get('/tasks/{task}', 'TasksController@show');

// contrillers - нужны для хранения логики роутев
Route::get('/', 'HomeController@index');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');

Route::post('/posts/{post}/comment', 'CommentsController@store');
Route::get('/comments', 'CommentsController@index');
Route::put('/comments/{comment}', 'CommentsController@update');




