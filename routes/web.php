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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/articles', "App\Http\Controllers\ArticleController@showArticles");

Route::get('/article-new', "App\Http\Controllers\ArticleController@articleNew");
Route::post('/article-save', "App\Http\Controllers\ArticleController@articleSave")->name('cargararticulo');















Route::post('/save-use', function () {
    //return view('welcome');
    dd('posts');
});

Route::put('/save-use-edit', function () {
    //return view('welcome');
    dd('posts');
});

Route::delete('/save-use-delete', function () {
    //return view('welcome');
    dd('posts');
});