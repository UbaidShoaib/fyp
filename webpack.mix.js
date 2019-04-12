const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.styles([



    'resources/css/animate.css',
    'resources/css/bootstrap.min.css',
    'resources/css/classy-nav.min.css',
    'resources/css/custom-icon.css',
    'resources/css/font-awesome.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/nice-select.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/style.css',
    'resources/css/main.css'




],'public/css/libs.css');




mix.scripts([

    'resources/js/jquery/jquery-2.2.4.min.js',
    'resources/js/bootstrap/popper.min.js',
    'resources/js/bootstrap/bootstrap.min.js',
    'resources/js/plugins/plugins.js',
    'resources/js/active.js',
    'resources/js/main.js'


],'public/js/libs.js');