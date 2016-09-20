const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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
  var ui_kit = {
  js: 'assets/js',
  };

elixir(function(mix) {
     // mix.sass('app.scss');
     // mix.scripts('app.js');
     mix.sass('material-kit.scss');
     mix.scripts([
     	"jquery.min.js",
     	"bootstrap.min.js",
     	"material.min.js",
     	"nouislider.min.js",
     	"bootstrap-datepicker.js",
     	"jquery.dropdown.js",
     	"jquery.tagsinput.js",
     	"jasny-bootstrap.min.js",
     	"material-kit.js",
     	],'public/js/theme.js')
});