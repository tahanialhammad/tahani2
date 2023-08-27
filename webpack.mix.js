const mix = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
    .copy('resources/assets/images', 'public/images')
    .vue()
    .sass('resources/assets/sass/app.scss', 'public/css');