<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('HOME');
});

Route::get('/', fn () => 'Home');
Route::get('/gallery', fn () => 'Gallery');
Route::get('/contact', fn () => 'Contact');
Route::get('/about', fn () => 'About');
Route::get('/user/{user}', fn ($user) => "My name is {$user}")->whereAlphaNumeric('user');
Route::get('/user/{id}/{name}', function ($id, $name) {
return "My id is {$id} and my name is {$name}";
})->whereNumber('id')->whereAlpha('name');