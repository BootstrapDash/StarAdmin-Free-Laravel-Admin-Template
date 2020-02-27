const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps(true, "source-maps")
    .browserSync({
        proxy: "127.0.0.1:8000",
        port: 3100,
        ghostMode: false,
        notify: false
    });

// Copy plugin files to public folder
mix.copyDirectory("node_modules/@mdi", "public/assets/plugins/@mdi")
    // .copyDirectory('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js', 'public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')
    .copyDirectory(
        [
            "node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js",
            "node_modules/perfect-scrollbar/css/perfect-scrollbar.css"
        ],
        "public/assets/plugins/perfect-scrollbar"
    )
    .copyDirectory(
        "node_modules/bootstrap-datepicker/dist",
        "public/assets/plugins/bootstrap-datepicker"
    )
    .copyDirectory(
        "node_modules/tempusdominus-bootstrap-4/build",
        "public/assets/plugins/tempusdominus-bootstrap-4"
    )
    .copyDirectory(
        "node_modules/moment/moment.js",
        "public/assets/plugins/moment/moment.js"
    )
    .copyDirectory(
        "node_modules/chart.js/dist/Chart.min.js",
        "public/assets/plugins/chartjs/chart.min.js"
    )
    .copyDirectory(
        "node_modules/jquery-sparkline/jquery.sparkline.min.js",
        "public/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"
    )
    .copyDirectory(
        "node_modules/jquery.easing/jquery.easing.min.js",
        "public/assets/plugins/jquery.easing/jquery.easing.min.js"
    );
