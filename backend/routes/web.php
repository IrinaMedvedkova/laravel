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
Route::get('/', function () {
    return view('index');
});

// Регистрация
Route::get('/signin', function () {
    return view('pages.signin');
});

// Рецепты все
Route::get('/categorieslist', function () {
    return view('pages.categorieslist');
});

//  Страница с рецептом
Route::get('/singlepost', function () {
    return view('pages.singlepost');
});

// О нас
Route::get('/about', function () {
    return view('pages.about');
});

// Контакты
Route::get('/contact', function () {
    return view('pages.contact');
});




Route::get('/404', function () {
    return view('pages.pages.404');
});

Route::get('/welcome', function () {
    return view('welcome');
});
