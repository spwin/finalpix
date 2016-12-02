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
 mix.copy('resources/assets/img', 'public/img');

 mix.sass('app.scss');

 mix.scripts([
  'jquery_v1_11_3.js',
  'rotate.js',
  'script.js',
  'EasePack.min.js',
  'rAF.js',
  'TweenLite.min.js',
  'typed.js',
  'demo-1.js'
 ]);

});