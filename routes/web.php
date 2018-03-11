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

Route::group(["middleware" => "auth"],function(){
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    
    Route::get('/check-role','Controller@index');
    
    Route::group(['middleware' => "admin","prefix" => "admin"],function(){
        /* ADMIN (toutes les routes admin ici)*/
        Route::get('/', function()
        {
            return view('admin/admin');
        });

        Route::get('/gestion-centres', function()
        {
            return view('admin/gestion-centres');
        });

        Route::get('/gestion-commandes', function()
        {
            return view('admin/gestion-commandes');
        });

        Route::get('/gestion-encarts-publicitaires', function()
        {
            return view('admin/gestion-encarts-publicitaires');
        });

        Route::get('/gestion-equivalences', function()
        {
            return view('admin/gestion-equivalences');
        });

        Route::get('/gestion-laboratoires', function()
        {
            return view('admin/gestion-laboratoires');
        });

        Route::get('/gestion-visiteurs', function()
        {
            return view('admin/gestion-visiteurs');
        });

        Route::get('/gestion-partenaires', function()
        {
            return view('admin/gestion-partenaires');
        });

        Route::get('/gestion-produits', function()
        {
            return view('admin/gestion-produits');
        });

        Route::get('/gestion-utilisateurs', function()
        {
            return view('admin/gestion-utilisateurs');
        });
    });

    Route::group(["middleware" =>"users"],function(){
        /* Appli (toutes les routes appli (utilisateurs normal) ici)*/
        Route::get('/catalogue', 'CatalogueController@index');
        Route::get('/mon-compte', 'UsersController@index');
        Route::get('/mes-commandes', 'MesCommandesController@index');
    });
    
});





