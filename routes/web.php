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

Route::auth();

Route::get('/', function () {
    return view('vitrine.home');
});

Route::get('/dossier', function () {
    echo "dossier ";
});

Route::get('/formation', function()
{
    return view('vitrine.formation');
});

Route::get('/news', function()
{
    return view('vitrine.news');
});

Route::get('/equivalence-generique', function()
{
    return view('vitrine.equivalence-generique');
});

Route::get('/laboratoire', function()
{
    return view('vitrine.laboratoire');
});

Route::get('/contact', function()
{
    return view('vitrine.contact');
});

Route::get('/login2', function()
{
    return view('vitrine.login');
});

Route::get('/admin', function()
{
    return view('admin.admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
