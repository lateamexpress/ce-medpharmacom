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
Route::get('/formation',function(){
    return view("vitrine.formation");
});

Route::get('/news',function(){
    return view("vitrine.news");
});

Route::get('/equivalence-generique',function(){
    return view("vitrine.equivalence-generique");
});

Route::get('/laboratoire', 'LaboratoireController@index');
Route::post('/laboratoire/{slug}', 'LaboratoireController@filtre');

/*
Route::get('/contact',function(){
    return view("vitrine.contact");
});
*/

Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]);

Route::post('/contact', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);

Route::auth();

Route::group(["middleware" => "auth"],function(){
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    
    Route::get('/check-role','Controller@index');

    // rss testing
    Route::get('/news', 'HomeController@index');

    Route::get('/', 'HomeController@returnView');
    
    Route::group(['middleware' => "admin","prefix" => "admin"],function(){
        /* ADMIN (toutes les routes admin ici)*/
        Route::get('/', function()
        {
            return view('admin/admin');
        });

        Route::get('/gestion-centres', 'GestionController@centres');

        Route::get('/gestion-commandes', 'GestionController@commandes');

        Route::get('/gestion-encarts-publicitaires', 'GestionController@encarts_publicitaires');

        Route::get('/gestion-equivalences', 'GestionController@equivalences');

        Route::get('/gestion-laboratoires', 'GestionController@laboratoires');

        Route::get('/gestion-visiteurs', 'GestionController@visiteurs');

        Route::get('/gestion-partenaires', 'GestionController@partenaires');

        Route::get('/gestion-produits', 'GestionController@produits');

        Route::get('/gestion-utilisateurs', 'GestionController@utilisateurs');
    });

    Route::group(["middleware" =>"users"],function(){
        /* Appli (toutes les routes appli (utilisateurs normal) ici)*/
        Route::get('/catalogue', 'CatalogueController@index');
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




