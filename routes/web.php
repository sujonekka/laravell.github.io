<?php

use App\Http\Controllers\bookcontroller;
use App\Http\Controllers\weathercontrolller;
use Illuminate\Support\Facades\Route;
Route::get('/', function() {
    return "Hello, World!";
});

// Route::get('/books', [bookcontroller::class, 'books']);
// Route::get('/books/{id}', [bookcontroller::class, 'getbookId'])->whereNumber(('id'));
// Route::get('/books/{id}/{field}', [bookcontroller::class, 'getbooksfield']);


Route::controller(bookcontroller::class)->group(function(){

Route::get('/books','books');
Route::get('/books/{id}','getbookId')->whereNumber(('id'));
Route::get('/books/{id}/{field}','getbooksfield');
Route::post('/books', 'createbook');

});

Route::get('/weather/{city?}', [weathercontrolller::class, 'getweather']);
Route::get('/hello', [\App\Http\Controllers\mycontroller::class, 'ipcheck']);
