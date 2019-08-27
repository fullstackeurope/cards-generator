const mix = require('laravel-mix');

mix
    .postCss('resources/css/main.css', 'public/css', [
        require('tailwindcss'),
    ]);
