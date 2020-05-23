<?php

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
    return redirect('/books');
});
Route::get('/books/cheapest', 'BookController@cheapest')->middleware('auth');
Route::get('/books/longest', 'BookController@longest')->middleware('auth');
Route::post('/books/{id}/update', 'BookController@update')->middleware('auth');
Route::get('/books/{id}/delete', 'BookController@destroy')->middleware('auth');
Route::resource('books', 'BookController')->middleware('auth');
Route::resource('loans', 'LoanController')->middleware('auth');
Route::resource('authors', 'AuthorController')->middleware('auth');
Auth::routes();
