const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'public/assets/js/jquery-1.12.4.minb8ff.js',
        'public/assets/js/jquery-ui-1.12.4.minb8ff.js',
        'public/assets/js/bootstrap.min.js',
        'public/assets/js/jquery.flexslider.js',
        'public/assets/js/chosen.jquery.min.js',
        'public/assets/js/owl.carousel.min.js',
        'public/assets/js/jquery.countdown.min.js',
        'public/assets/js/jquery.sticky.js',
        'public/assets/js/functions.js',
    ], 'public/js/scripts.js')

    .styles([
        'public/assets/css/animate.css',
        'public/assets/css/font-awesome.min.css',
        'public/assets/css/bootstrap.min.css',
        'public/assets/css/owl.carousel.min.css',
        'public/assets/css/chosen.min.css',
        'public/assets/css/style.css',
        'public/assets/css/color-01.css',

    ], 'public/css/styles.css')

    .postCss('resources/css/app.css', 'public/css', [

        require('tailwindcss')
    ]);
