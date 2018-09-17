<?php

Route::get('/', 'PostsController@index');

// 1. Eloquent model => Post
// 2. Controller => PostsController
// 3. Migration => create_posts_table

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');