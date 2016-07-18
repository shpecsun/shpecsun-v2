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
var basePath = {
  bower: 'vendor/bower_components',
  materialize: '/Materialize/bin/'
  };

elixir(function(mix) {
     mix.sass('app.scss');
     mix.scripts('app.js');
	  mix.copy(basePath.bower + basePath.materialize +  'materialize.css','public/css/materialize.css');
  	  mix.copy(basePath.bower + basePath.materialize +  'materialize.js','public/js/materialize.js');

});

