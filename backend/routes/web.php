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
//  Главная
Route::get('/', 'App\Http\Controllers\PageController@index');

// Регистрация
Route::get('/signin', 'App\Http\Controllers\PageController@signin');

// Рецепты все
Route::get('/categorieslist', 'App\Http\Controllers\PageController@categorieslist');

//  Страница с рецептом
Route::get('/singlepost', 'App\Http\Controllers\PageController@singlepost');

// О нас
Route::get('/about', 'App\Http\Controllers\PageController@about');

// Контакты
Route::get('/contact', 'App\Http\Controllers\PageController@contact');



Route::get('/404', function () {
    return view('pages.pages.404');
});

Route::get('/welcome', function () {
    return view('welcome');
});
