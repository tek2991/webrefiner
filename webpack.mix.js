const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/tippy.js', 'public/js')
    .js('resources/js/popper.js', 'public/js')
    .js('resources/js/lightgallery.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/css/tippy.css', 'public/css')
    .postCss('resources/css/page.css', 'public/css')
    .postCss('resources/css/normalize.css', 'public/css')
    .postCss('resources/css/lightgallery-bundle.css', 'public/css')

if (mix.inProduction()) {
    mix.version();
}
