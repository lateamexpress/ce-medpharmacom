const elixir = require('laravel-elixir');

elixir((mix) => {
    // Admin
    mix.sass([
        'admin/admin.scss'
    ], 'public/css/admin/admin.css')
        .sass([
            'admin/gestion-encarts-publicitaires.scss'
        ], 'public/css/admin/gestion-encarts-publicitaires.css')
        .sass([
            'admin/gestion-commandes.scss'
        ], 'public/css/admin/gestion-commandes.css')
        .sass([
            'admin/gestion-utilisateurs.scss'
        ], 'public/css/admin/gestion-utilisateurs.css')
        // Client
        .sass([
            'client/catalogue.scss'
        ], 'public/css/client/catalogue.css')
        .sass([
            'client/mon-compte.scss'
        ], 'public/css/client/mon-compte.css')
        .sass([
            'client/mes-commandes.scss'
        ], 'public/css/client/mes-commandes.css')
        .sass([
            'client/commande.scss'
        ], 'public/css/client/commande.css')
        .sass([
            'client/produit.scss'
        ], 'public/css/client/produit.css')
        .sass([
            'client/home.scss'
        ], 'public/css/client/home.css');
});