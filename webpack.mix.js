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

mix.copy('node_modules/@aacassandra/jquery_upload_preview', 'public/node_modules/@aacassandra/jquery_upload_preview');
mix.copy('node_modules/@aacassandra/jquery.pwstrength', 'public/node_modules/@aacassandra/jquery.pwstrength');
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
mix.copy('node_modules/bootstrap', 'public/node_modules/bootstrap');
mix.copy('node_modules/bootstrap-colorpicker', 'public/node_modules/bootstrap-colorpicker');
mix.copy('node_modules/bootstrap-daterangepicker', 'public/node_modules/bootstrap-daterangepicker');
mix.copy('node_modules/bootstrap-social', 'public/node_modules/bootstrap-social');
mix.copy('node_modules/bootstrap-tagsinput', 'public/node_modules/bootstrap-tagsinput');
mix.copy('node_modules/bootstrap-timepicker', 'public/node_modules/bootstrap-timepicker');
mix.copy('node_modules/chart.js', 'public/node_modules/chart.js');
mix.copy('node_modules/chocolat', 'public/node_modules/chocolat');
mix.copy('node_modules/cleave.js', 'public/node_modules/cleave.js');
mix.copy('node_modules/codemirror', 'public/node_modules/codemirror');
mix.copy('node_modules/datatables', 'public/node_modules/datatables');
mix.copy('node_modules/datatables.net-bs4', 'public/node_modules/datatables.net-bs4');
mix.copy('node_modules/datatables.net-responsive-bs4', 'public/node_modules/datatables.net-responsive-bs4');
mix.copy('node_modules/datatables.net-select-bs4', 'public/node_modules/datatables.net-select-bs4');
mix.copy('node_modules/dropzone', 'public/node_modules/dropzone');
mix.copy('node_modules/flag-icon-css', 'public/node_modules/flag-icon-css');
mix.copy('node_modules/fullcalendar', 'public/node_modules/fullcalendar');
mix.copy('node_modules/gmaps', 'public/node_modules/gmaps');
mix.copy('node_modules/ionicons201', 'public/node_modules/ionicons201');
mix.copy('node_modules/izitoast', 'public/node_modules/izitoast');
mix.copy('node_modules/jquery', 'public/node_modules/jquery');
mix.copy('node_modules/jquery-sparkline', 'public/node_modules/jquery-sparkline');
mix.copy('node_modules/jquery-ui-dist', 'public/node_modules/jquery-ui-dist');
mix.copy('node_modules/jquery.nicescroll', 'public/node_modules/jquery.nicescroll');
mix.copy('node_modules/jqvmap', 'public/node_modules/jqvmap');
mix.copy('node_modules/moment', 'public/node_modules/moment');
mix.copy('node_modules/nicescroll', 'public/node_modules/nicescroll');
mix.copy('node_modules/owl.carousel', 'public/node_modules/owl.carousel');
mix.copy('node_modules/perfect-scrollbar', 'public/node_modules/perfect-scrollbar');
mix.copy('node_modules/popper.js', 'public/node_modules/popper.js');
mix.copy('node_modules/prismjs', 'public/node_modules/prismjs');
mix.copy('node_modules/select2', 'public/node_modules/select2');
mix.copy('node_modules/selectric', 'public/node_modules/selectric');
mix.copy('node_modules/simpleweather', 'public/node_modules/simpleweather');
mix.copy('node_modules/sticky-kit', 'public/node_modules/sticky-kit');
mix.copy('node_modules/summernote', 'public/node_modules/summernote');
mix.copy('node_modules/sweetalert', 'public/node_modules/sweetalert');
mix.copy('node_modules/tooltip.js', 'public/node_modules/tooltip.js');
mix.copy('node_modules/weathericons', 'public/node_modules/weathericons');

if (mix.inProduction()) {
  mix.version();
}
