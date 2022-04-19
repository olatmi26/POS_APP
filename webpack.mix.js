const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |.vue()
 */
mix.copy(
    [
        'node_modules/chart.js/dist/chart.js'
    ],
    'public/js/chart.js'
);
// mix.copy(
//     [
//         'node_modules/popper.js/dist'
//     ],
//     'public/js/popper.js'
// );

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/adminsrcipts.js', 'public/js')
    .js('resources/js/dashboard.js', 'public/js')
    .sass('resources/sass/adminLTE.scss', 'public/css/dashboard.css')
    .sass('resources/sass/_fonts.scss', 'public/plugins/fonts')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);