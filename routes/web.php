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

        Route::get('/gestion-partenaires', 'GestionController@partenaires');

        Route::get('/gestion-commandes', 'GestionCommandeController@commandeAll');
        Route::get('/gestion-commandes/{id}', 'GestionCommandeController@commandebyid');
        Route::post('/gestion-commandes/ajout', 'GestionCommandeController@commandeAjouter');
        Route::post('/gestion-commandes/modifier/{id}', 'GestionCommandeController@commandeModifier');
        Route::post('/gestion-commandes/supprimer/{id}', 'GestionCommandeController@commandeSupprimer');

        Route::get('/gestion-equivalences', 'GestionEquivalenceController@generiqueAll');
        Route::get('/gestion-equivalences/{id}', 'GestionEquivalenceController@generiqueById');
        Route::post('/gestion-equivalences/ajout', 'GestionEquivalenceController@generiqueAjouter');
        Route::post('/gestion-equivalences/modifier/{id}', 'GestionEquivalenceController@generiqueModifier');
        Route::post('/gestion-equivalences/supprimer/{id}', 'GestionEquivalenceController@generiqueSupprimer');

        Route::get('/gestion-encarts-publicitaires', 'GestionPubController@pubAll');
        Route::get('/gestion-encarts-publicitaires/{id}', 'GestionPubController@pubById');
        Route::post('/gestion-encarts-publicitaires/ajout', 'GestionPubController@pubAjouter');
        Route::post('/gestion-encarts-publicitaires/modifier/{id}', 'GestionPubController@pubModifier');
        Route::post('/gestion-encarts-publicitaires/supprimer/{id}', 'GestionPubController@pubSupprimer');

        Route::get('/gestion-produits', 'GestionProduitController@produitAll');
        Route::get('/gestion-produits/withfivelast/', 'GestionProduitController@produitsAll_And_FiveLast');
        Route::get('/gestion-produits/{id}', 'GestionProduitController@produitById');
        Route::post('/gestion-produits/ajout', 'GestionProduitController@produitAjouter');
        Route::post('/gestion-produits/modifier/{id}', 'GestionProduitController@produitModifier');
        Route::post('/gestion-produits/supprimer/{id}', 'GestionProduitController@produitSupprimer');

        Route::get('/gestion-laboratoires', 'GestionLaboratoireController@laboratoireAll');
        Route::get('/gestion-laboratoires/{id}', 'GestionLaboratoireController@laboratoireById');
        Route::post('/gestion-laboratoires/ajout', 'GestionLaboratoireController@laboratoireAjouter');
        Route::post('/gestion-laboratoires/modifier/{id}', 'GestionLaboratoireController@laboratoireModifier');
        Route::post('/gestion-laboratoires/supprimer/{id}', 'GestionLaboratoireController@laboratoireSupprimer');

        Route::get('/gestion-utilisateurs', 'GestionUtilisateurController@utilisateurAll');
        Route::get('/gestion-utilisateurs/{id}', 'GestionUtilisateurController@utilisateurById');
        Route::post('/gestion-utilisateurs/ajout', 'GestionUtilisateurController@utilisateurAjouter');
        Route::post('/gestion-utilisateurs/modifier/{id}', 'GestionUtilisateurController@utilisateurModifier');
        Route::post('/gestion-utilisateurs/supprimer/{id}', 'GestionUtilisateurController@utilisateurSupprimer');
        Route::post('/gestion-utilisateurs/ajout-csv', 'GestionUtilisateurController@utilisateursAjouterByCSV');
    });

    Route::group(["middleware" =>"users"],function(){
        /* Appli (toutes les routes appli (utilisateurs normal) ici)*/
        Route::get('/', 'HomeController@returnSpecificHome');
        Route::get('/produit/{id]', 'ProduitController@index');
        Route::get('/catalogue', 'CatalogueController@produitAll');
        Route::get('/produit/{id}', 'CatalogueController@produitById');
        Route::get('/catalogue/withfivelast/', 'CatalogueController@produitsAll_And_FiveLast');
        Route::get('/mon-compte', 'UsersController@index');
        Route::post('/mon-compte/ajout', 'UsersController@insertUsers');

        Route::get('/mes-commandes', 'MesCommandesController@commandesAll');
        Route::get('/mes-commandes/{id}', 'MesCommandesController@commandebyid');
        Route::post('/mes-commandes/ajout', 'MesCommandesController@commandeAjouter');
        Route::post('/mes-commandes/modifier/{id}', 'MesCommandesController@commandeModifier');
        Route::post('/mes-commandes/supprimer/{id}', 'MesCommandesController@commandeSupprimer');

        Route::get('/commande', 'CommandeController@index');
        Route::post('/commande/ajout', 'CommandeController@ajoutCommande');
        Route::get('/commande/{id}', 'CommandeController@commandeParId');
    });
    
});

Route::get('/image/{id}', 'ImageController@display');




