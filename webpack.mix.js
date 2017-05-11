const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/style.scss', 'public/css')
    .options({
        processCssUrls:false
    })

    .styles([
        'resources/assets/sass/plugins/materialize.css',
        'public/css/style.css',
    ], 'public/css/all.css')

    .scripts ([
        'resources/assets/js/plugins/jQuery.js',
        'resources/assets/js/plugins/materialize.js',
        'resources/assets/js/script.js'
    ], 'public/js/all.js');


