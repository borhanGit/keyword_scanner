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

mix.js('resources/js/src/app-admin.js', 'public/js')
    .js('resources/js/src/app-gsm.js', 'public/js')
    .js('resources/js/src/app-rsm.js', 'public/js')
    .js('resources/js/src/app-dsm.js', 'public/js')
    
    .sass('resources/sass/app.scss', 'public/css');
