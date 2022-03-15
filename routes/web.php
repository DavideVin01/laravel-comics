<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Home';
});
Route::get('/comics', function () {
    return 'Comics';
});
Route::get('/characters', function () {
    return 'Characters';
});
Route::get('/movies', function () {
    return 'movies';
});
Route::get('/tv', function () {
    return 'tv';
});
Route::get('/games', function () {
    return 'games';
});
Route::get('/collectibles', function () {
    return 'collectibles';
});
Route::get('/videos', function () {
    return 'videos';
});
Route::get('/fans', function () {
    return 'fans';
});
Route::get('/news', function () {
    return 'news';
});
Route::get('/shop', function () {
    return 'shop';
});
