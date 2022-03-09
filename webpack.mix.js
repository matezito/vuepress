let mix = require('laravel-mix');

mix.js('src/js/app.js', 'public/js')
    .js('src/js/admin.js', 'public/admin')
    .vue();