var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
   mix.stylus('main.styl')
      .styles([
      	'public/css/reset.css',
         'public/css/atelier-font.css',
      	'public/css/style.css',
         'public/css/slick.css',
      	'public/css/main.css'
      	],'public/css/all.min.css', 'public/css')
      .scripts([
      	'public/js/modernizr.js',
      	'public/js/jquery.js',
         'public/js/slick.min.js',
      	'public/js/main.js',
      	'public/js/custom.js'
      	],'public/js/custom-scripts.min.js', 'public/js')
      .version(['public/css/all.min.css', 'public/js/custom-scripts.min.js', 'public/favicon.png']);
});