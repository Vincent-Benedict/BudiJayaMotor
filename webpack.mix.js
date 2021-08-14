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
    .sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/header.scss', 'public/css')
    .sass('resources/sass/footer.scss', 'public/css')
    .sass('resources/sass/contact_us.scss', 'public/css')
    .sass('resources/sass/card.scss', 'public/css')
    .sass('resources/sass/detail_car.scss', 'public/css')
    .sass('resources/sass/minor_style.scss', 'public/css')
    .sass('resources/sass/type_car.scss', 'public/css')
    .sass('resources/sass/update_car.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/user_page.scss', 'public/css')
    .sass('resources/sass/form.scss', 'public/css')
    .sass('resources/sass/form_user.scss', 'public/css')
