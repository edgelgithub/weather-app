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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/init.js', 'public/js')
    .copy('resources/js/slick.min.js', 'public/js')
     .copy('resources/js/jquery.nice-select.min.js', 'public/js')
    .copy('resources/js/jquery.scrollUp.min.js', 'public/js')
    .copy('resources/js/wow.min.js', 'public/js')
    .copy('resources/js/jquery.ajaxchimp.min.js', 'public/js')
    .copy('resources/fonts', 'public/fonts')
    // .copu('resources/js/slick.min.js')
    .vue()
    .sass('resources/sass/style.scss', 'public/css');
