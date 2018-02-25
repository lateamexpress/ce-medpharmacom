let elixir = require('laravel-elixir');

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
});