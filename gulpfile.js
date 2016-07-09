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
  };

elixir(function(mix) {
     mix.sass('app.scss');
	  mix.copy(basePath.bower + '/metaphor/dist/css/metaphor.css','public/css/metaphor.css');
	  mix.copy(basePath.bower + '/metaphor/dist/js/metaphor.js','public/js/metaphor.js');

});

