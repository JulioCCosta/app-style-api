const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/personalfinance.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/personalfinance.css');

if (mix.inProduction()) {
    mix.version();
}