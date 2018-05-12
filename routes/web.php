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
        Route::get('/', 'HomeController@returnSpecificHome');
        Route::get('/gestion-centres', 'GestionController@centres');
        Route::get('/gestion-commandes', 'GestionController@commandes');
        Route::get('/gestion-encarts-publicitaires', 'GestionController@encarts_publicitaires');
        Route::get('/gestion-partenaires', 'GestionController@partenaires');
        Route::get('/gestion-produits', 'GestionController@produits');
        Route::get('/gestion-utilisateurs', 'GestionController@utilisateurs');
    });

    Route::group(["middleware" =>"users"],function(){
        /* Appli (toutes les routes appli (utilisateurs normal) ici)*/
        Route::get('/', 'HomeController@returnSpecificHome');
        Route::get('/produit/{id]', 'ProduitController@index');
        Route::get('/catalogue', 'CatalogueController@produitAll');
        Route::get('/catalogue/{id}', 'CatalogueController@produitAll');
        Route::get('/mon-compte', 'UsersController@index');
        Route::post('/mon-compte/ajout', 'UsersController@insertUsers');
        Route::get('/mes-commandes', 'MesCommandesController@index');
        Route::get('/commande', 'CommandeController@index');
        Route::post('/commande/ajout', 'CommandeController@ajoutCommande');
        Route::get('/commande/{id}', 'CommandeController@commandeParId');
    });
    
});

Route::get('/image/{id}', 'ImageController@display');




