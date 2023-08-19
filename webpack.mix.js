const mix = require('laravel-mix');

// mix.js('resources/assets/js/app.js', 'public/js')
// .postCss('resources/assets/sass/app.scss', 'public/css', [
//     // require('tailwindcss'),
//     // require('autoprefixer'),
// ]);


mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');