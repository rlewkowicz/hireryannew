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

mix.js('resources/assets/js/app.js', 'public/js/app.js').js('resources/assets/js/checkbox.js', 'public/js/checkbox.js')
   .sass("resources/assets/sass/base.scss", 'public/css/app.css')
   .browserSync('hirecheck.dev');
