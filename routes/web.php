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
        Route::post('/gestion-commandes/modifier/{id}', 'GestionCommandeController@commandeChangeStatut');
        Route::post('/gestion-commandes/supprimer/{id}', 'GestionCommandeController@commandeSupprimer');
        Route::post('/gestion-commandes', [
            'uses' => 'GestionCommandeController@commandeFiltre',
        ]);

        Route::get('/gestion-equivalences', 'GestionEquivalenceController@generiqueAll');
        Route::get('/gestion-equivalences/{id}', 'GestionEquivalenceController@generiqueById');
        Route::post('/gestion-equivalences/ajout', 'GestionEquivalenceController@generiqueAjouter');
        Route::post('/gestion-equivalences/modifier/{id}', 'GestionEquivalenceController@generiqueModifier');
        Route::post('/gestion-equivalences/supprimer/{id}', 'GestionEquivalenceController@generiqueSupprimer');
        Route::post('/gestion-equivalences', [
            'uses' => 'GestionEquivalenceController@generiqueFiltre',
        ]);

        Route::get('/gestion-encarts-publicitaires', 'GestionPubController@pubAll');
        Route::get('/gestion-encarts-publicitaires/{id}', 'GestionPubController@pubById');
        Route::post('/gestion-encarts-publicitaires/ajout', 'GestionPubController@pubAjouter');
        Route::post('/gestion-encarts-publicitaires/modifier/{id}', 'GestionPubController@pubModifier');
        Route::post('/gestion-encarts-publicitaires/supprimer/{id}', 'GestionPubController@pubSupprimer');
        Route::post('/gestion-encarts-publicitaires', [
            'uses' => 'GestionPubController@pubFiltre',
        ]);


        Route::get('/gestion-produits', 'GestionProduitController@produitAll');
        Route::get('/gestion-produits/withfivelast/', 'GestionProduitController@produitsAll_And_FiveLast');
        Route::get('/gestion-produits/{id}', 'GestionProduitController@produitById');
        Route::post('/gestion-produits/ajout', 'GestionProduitController@produitAjouter');
        Route::post('/gestion-produits/modifier/{id}', 'GestionProduitController@produitModifier');
        Route::post('/gestion-produits/supprimer/{id}', 'GestionProduitController@produitSupprimer');
        Route::post('/gestion-produits/ajout-csv', 'GestionProduitController@produitAjouterByCSV');
        Route::post('/gestion-produits', [
            'uses' => 'GestionProduitController@produitFiltre',
        ]);

        Route::get('/gestion-laboratoires', 'GestionLaboratoireController@laboratoireAll');
        Route::get('/gestion-laboratoires/{id}', 'GestionLaboratoireController@laboratoireById');
        Route::post('/gestion-laboratoires/ajout', 'GestionLaboratoireController@laboratoireAjouter');
        Route::post('/gestion-laboratoires/modifier/{id}', 'GestionLaboratoireController@laboratoireModifier');
        Route::post('/gestion-laboratoires/supprimer/{id}', 'GestionLaboratoireController@laboratoireSupprimer');
        Route::post('/gestion-laboratoires', [
            'uses' => 'GestionLaboratoireController@laboratoireFiltre',
        ]);

        Route::get('/gestion-utilisateurs', 'GestionUtilisateurController@utilisateurAll');
        Route::get('/gestion-utilisateurs/{id}', 'GestionUtilisateurController@utilisateurById');
        Route::post('/gestion-utilisateurs/ajout', 'GestionUtilisateurController@utilisateurAjouter');
        Route::post('/gestion-utilisateurs/modifier/{id}', 'GestionUtilisateurController@utilisateurModifier');
        Route::post('/gestion-utilisateurs/supprimer/{id}', 'GestionUtilisateurController@utilisateurSupprimer');
        Route::post('/gestion-utilisateurs/ajout-csv', 'GestionUtilisateurController@utilisateursAjouterByCSV');
        Route::post('/gestion-utilisateurs', [
            'uses' => 'GestionUtilisateurController@utilisateurFiltre',
        ]);
    });

    Route::group(["middleware" =>"users"],function(){
        //Route::get('/test', 'testController@test');
        /* Appli (toutes les routes appli (utilisateurs normal) ici)*/
        Route::get('/', 'HomeController@returnSpecificHome');
        Route::get('/produit/{id]', 'ProduitController@index');
        Route::get('/catalogue', 'CatalogueController@produitAll');
        Route::post('/catalogue', 'CatalogueController@produitFiltre');
        Route::post('/catalogue', 'CatalogueController@checkout');
        Route::get('/produit/{id}', 'CatalogueController@produitById');
        Route::get('/catalogue/withfivelast/', 'CatalogueController@produitsAll_And_FiveLast');
        Route::get('/mon-compte', 'UsersController@index');
        Route::post('/mon-compte', 'UsersController@usersModifier');

        Route::get('/mes-commandes', 'MesCommandesController@commandeAll');
        Route::get('/mes-commandes/{id}', 'MesCommandesController@commandebyid');
        Route::post('/mes-commandes/ajout', 'MesCommandesController@commandeAjouter');
        Route::post('/mes-commandes/statut/{id}', 'MesCommandesController@commandeChangeStatut');
        Route::post('/mes-commandes/modifier/{id}', 'MesCommandesController@commandeModifier');
        Route::post('/mes-commandes/supprimer/{id}', 'MesCommandesController@commandeSupprimer');

        Route::get('/panier/{id}', 'PanierController@panierbyid');
        Route::post('/panier/ajout', 'PanierController@panierAjouter');
        Route::post('/panier/modifier/{id}', 'PanierController@panierModifier');
        Route::post('/panier/supprimer/{id}', 'PanierController@panierSupprimer');

        Route::get('/commande', 'CommandeController@index');
        Route::post('/commande', 'CommandeController@ajoutCommande');
        Route::get('/commande/{id}', 'CommandeController@commandeParId');
        Route::get('/mon-panier', 'PanierController@getTemplatePanier');
        Route::post('/mon-panier', 'PanierController@enregistrerCmd');
    });
    
});

Route::get('/image/{id}', 'ImageController@display');
/*
Route::get('/test',function(){
})
*/




