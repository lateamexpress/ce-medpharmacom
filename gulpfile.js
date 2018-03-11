const elixir = require('laravel-elixir');

elixir((mix) => {
    // Vitrine
    mix.sass([
        'vitrine/contact-form.scss'
    ], 'public/css/vitrine/contact-form.css');
    mix.sass([
        'vitrine/formation.scss'
    ], 'public/css/vitrine/formation.css');
    mix.sass([
        'vitrine/home.scss'
    ], 'public/css/vitrine/home.css');
    mix.sass([
        'vitrine/login.scss'
    ], 'public/css/vitrine/login.css');
    // Admin
    mix.sass([
        'admin/admin.scss'
    ], 'public/css/admin/admin.css');
    mix.sass([
        'admin/gestion-encarts-publicitaires.scss'
    ], 'public/css/admin/gestion-encarts-publicitaires.css');
    // Client
    mix.sass([
        'client/catalogue.scss'
    ], 'public/css/client/catalogue.css');
    mix.sass([
        'client/mon-compte.scss'
    ], 'public/css/client/mon-compte.css');
    mix.sass([
        'client/mes-commandes.scss'
    ], 'public/css/client/mes-commandes.css');
});