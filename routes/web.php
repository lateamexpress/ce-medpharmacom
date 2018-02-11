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
    return view('home');
});


Route::get('/dossier', function () {
    echo "dossier ";
});

Route::get('/formation', function()
{
    return view('formation');
});

Route::get('/news', function()
{
    return view('news');
});

Route::get('/equivalence-generique', function()
{
    return view('equivalence-generique');
});

Route::get('/laboratoire', function()
{
    return view('laboratoire');
});

Route::get('/contact', function()
{
    return view('contact');
});