let mix = require('laravel-mix');
mix.sass('resources/assets/scss/app.scss', 'public/css/app.css');
mix.sass('resources/assets/scss/home.scss', 'public/css/home.css');
mix.styles(['public/css/app.css', 'public/css/home.css'], 'public/css/all.css');
mix.browserSync('127.0.0.1:8000');
