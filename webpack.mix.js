const mix = require('laravel-mix');
const fs = require('fs');
const path = require('path');

const getFiles = directory => {
  try {
    return fs.readdirSync(directory).filter(
      file => fs.statSync(path.resolve(directory, file)).isFile()
    );
  } catch (error) {
    return [];
  }
};

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

mix.sass('resources/scss/stisla/master.scss', 'public/css/stisla').sourceMaps();
mix.sass('resources/scss/stisla/style.scss', 'public/css/stisla');
mix.sass('resources/scss/stisla/components.scss', 'public/css/stisla');

mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
mix.copy('node_modules/summernote/dist/font', 'public/node_modules/summernote/dist/font');
mix.copy('node_modules/flag-icon-css/flags', 'public/node_modules/flag-icon-css/flags');

mix.combine([
  'node_modules/jquery/dist/jquery.min.js',
  'node_modules/popper.js/dist/umd/popper.min.js',
  'node_modules/bootstrap/dist/js/bootstrap.min.js',
  'node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js',
  'node_modules/moment/min/moment-with-locales.min.js',
], 'public/js/stisla/master.js').sourceMaps();

mix.copy(`resources/js/stisla/app.js`, 'public/js/stisla');
mix.copy(`resources/js/stisla/scripts.js`, 'public/js/stisla');

getFiles('resources/js/helpers').forEach(filename => {
  mix.copy(`resources/js/helpers/${filename}`, 'public/js/helpers');
});

[
  // put the specified page js directory here
  'page',
].forEach(directory => {
  getFiles(`resources/js/${directory}`).forEach(filename => {
    mix.copy(`resources/js/${directory}/${filename}`, `public/js/${directory}`);
  });
});

mix.combine('node_modules/select2/dist/css/select2.min.css', 'public/node_modules/select2/dist/css/select2.min.css');
mix.combine('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css');
mix.combine('node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css', 'public/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css');
mix.combine('node_modules/bootstrap-daterangepicker/daterangepicker.css', 'public/node_modules/bootstrap-daterangepicker/daterangepicker.css');
mix.combine('node_modules/summernote/dist/summernote-bs4.css', 'public/node_modules/summernote/dist/summernote-bs4.css');
mix.combine('node_modules/bootstrap-social/bootstrap-social.css', 'public/node_modules/bootstrap-social/bootstrap-social.css');
mix.combine('node_modules/jqvmap/dist/jqvmap.min.css', 'public/node_modules/jqvmap/dist/jqvmap.min.css');
mix.combine('node_modules/owl.carousel/dist/assets/owl.carousel.min.css', 'public/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');
mix.combine('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css', 'public/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css');
mix.combine('node_modules/chocolat/dist/css/chocolat.css', 'public/node_modules/chocolat/dist/css/chocolat.css');
mix.combine('node_modules/weathericons/css/weather-icons.min.css', 'public/node_modules/weathericons/css/weather-icons.min.css');
mix.combine('node_modules/weathericons/css/weather-icons-wind.min.css', 'public/node_modules/weathericons/css/weather-icons-wind.min.css');
mix.combine('node_modules/selectric/public/selectric.css', 'public/node_modules/selectric/public/selectric.css');
mix.combine('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', 'public/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css');
mix.combine('node_modules/codemirror/lib/codemirror.css', 'public/node_modules/codemirror/lib/codemirror.css');
mix.combine('node_modules/codemirror/theme/duotone-dark.css', 'public/node_modules/codemirror/theme/duotone-dark.css');

mix.combine('node_modules/select2/dist/js/select2.full.min.js', 'public/node_modules/select2/dist/js/select2.full.min.js');
mix.combine('node_modules/datatables/media/js/jquery.dataTables.min.js', 'public/node_modules/datatables/media/js/jquery.dataTables.min.js');
mix.combine('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js');
mix.combine('node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js', 'public/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js');
mix.combine('node_modules/datatables.net-plugins/i18n/id.json', 'public/node_modules/datatables.net-plugins/i18n/id.json');
mix.combine('node_modules/bootstrap-daterangepicker/daterangepicker.js', 'public/node_modules/bootstrap-daterangepicker/daterangepicker.js');
mix.combine('node_modules/summernote/dist/summernote-bs4.js', 'public/node_modules/summernote/dist/summernote-bs4.js');
mix.combine('node_modules/jquery-sparkline/jquery.sparkline.min.js', 'public/node_modules/jquery-sparkline/jquery.sparkline.min.js');
mix.combine('node_modules/chart.js/dist/Chart.min.js', 'public/node_modules/chart.js/dist/Chart.min.js');
mix.combine('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/node_modules/owl.carousel/dist/owl.carousel.min.js');
mix.combine('node_modules/chocolat/dist/js/jquery.chocolat.min.js', 'public/node_modules/chocolat/dist/js/jquery.chocolat.min.js');
mix.combine('node_modules/simpleweather/jquery.simpleWeather.min.js', 'public/node_modules/simpleweather/jquery.simpleWeather.min.js');
mix.combine('node_modules/jqvmap/dist/jquery.vmap.min.js', 'public/node_modules/jqvmap/dist/jquery.vmap.min.js');
mix.combine('node_modules/jqvmap/dist/maps/jquery.vmap.world.js', 'public/node_modules/jqvmap/dist/maps/jquery.vmap.world.js');
mix.combine('node_modules/sticky-kit/dist/sticky-kit.min.js', 'public/node_modules/sticky-kit/dist/sticky-kit.min.js');
mix.combine('node_modules/selectric/public/jquery.selectric.min.js', 'public/node_modules/selectric/public/jquery.selectric.min.js');
mix.combine('node_modules/@aacassandra/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js', 'public/node_modules/@aacassandra/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js');
mix.combine('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js', 'public/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js');
mix.combine('node_modules/codemirror/lib/codemirror.js', 'public/node_modules/codemirror/lib/codemirror.js');
mix.combine('node_modules/codemirror/mode/javascript/javascript.js', 'public/node_modules/codemirror/mode/javascript/javascript.js');
