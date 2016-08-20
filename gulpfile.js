var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('style.scss');
    mix.styles([
        'animate.css',
        'bootstrap.css',
        'plugins/*'
    ], 'public/css');
    mix.scripts('bootstrap.js', 'public/js/bootstrap.js');
    mix.scripts('jquery-2.1.1.js', 'public/js/jquery.js');
    mix.scripts('inspinia.js', 'public/js/inspinia.js');
    mix.scripts('jquery-ui-1.10.4.min.js', 'public/js/jquery-ui.js');
    mix.scripts('jquery-ui.custom.min.js', 'public/js/custom-jquery-ui.js');
    mix.scriptsIn('resources/assets/js/plugins');
});
