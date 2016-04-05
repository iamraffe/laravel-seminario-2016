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
    mix.sass('app.scss');

    mix.less(["admin/admin.less"], "public/css/admin/all.css").version(['public/css/app.css', "public/css/admin/all.css"]);

    mix.scripts(["jquery.min.js", "bootstrap.min.js", "outdatedbrowser.js", "custom.js"], "public/js", "resources/assets/javascript");

    mix.copy('resources/assets/javascript/admin/custom.js', 'public/js/admin/custom.js');

    mix.copy('resources/assets/javascript/admin/vendor.js', 'public/js/admin/vendor.js');

    mix.copy('resources/assets/fonts', 'public/build/css/fonts');

    mix.copy('resources/assets/fonts', 'public/fonts');
});
