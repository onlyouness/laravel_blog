let mix = require('laravel-mix');
mix.js("resources/js/app.js", "public/js")
.postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
    require('autoprefixer'),
]);


// mix.js('src/app.js', 'dist').setPublicPath('dist');
// const mix = require('laravel-mix');

// mix.postCss('resources/css/app.css', 'public/css', [
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);