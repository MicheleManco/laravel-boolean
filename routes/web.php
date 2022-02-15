<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@home') -> name('home');

Route::get('/api/postcards/list', 'ApiController@getPostcards') -> name('api.postcards.list');

Route::get('/create/postcard', 'GuestController@createPostcard') -> name('create.postcard');
Route::post('/store/postcard', 'GuestController@storePostcard') -> name('store.postcard');


