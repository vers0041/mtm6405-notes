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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/{name?}', function ($name = 'Friend') {
//     return "Hello {$name}!";
// });

Route::get('/', function () {
    return view('notes');
});

Route::get('/notes/{note}', function ($id) {
    $title = "Note {$id}";
    $text = "This is note {$id}";
    return view('note', ["title" => $title, "text" => $text]);
});