let mix = require('laravel-mix');

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

mix.less('bower_components/jquery-bar-rating/themes/fontawesome-stars.less','public/css')
   .less('bower_components/jquery-bar-rating/themes/bars-pill.less','public/css')
   .less('bower_components/jquery-bar-rating/themes/css-stars.less','public/css')
   .less('bower_components/jquery-bar-rating/themes/bars-square.less','public/css')
   // .copy('bower_components/jquery-bar-rating/jquery.barrating.js', 'public/js/jquery.barrating.js');
   // .copy('node_modules/vis/dist/vis.js', 'public/js/vis.js');
   .copy('node_modules/vis/dist/vis.css', 'public/css/vis.css');
