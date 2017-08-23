let mix = require('laravel-mix');

mix.styles([
	'public/AdminLTE/js/plugins/jquery-ui/jquery-ui.css',
	'public/AdminLTE/css/fullcalendar/fullcalendar.css',
	'public/AdminLTE/css/fullcalendar/fullcalendar.print.css',
	'public/AdminLTE/css/bootstrap.min.css',
	'public/AdminLTE/css/font-awesome.min.css',
	'public/AdminLTE/css/ionicons.min.css',
	'public/AdminLTE/css/datatables/dataTables.bootstrap.css',
	'public/AdminLTE/css/AdminLTE.css',
	'public/AdminLTE/easyui/css/easyui.css',
	'public/AdminLTE/easyui/css/icon.css'
], 'public/css/theme.css');

mix.scripts([
	'public/AdminLTE/js/jquery-2.0.2.min.js',
	'public/AdminLTE/js/plugins/jquery-ui/jquery-ui.js',
	'public/AdminLTE/js/bootstrap.min.js',
	'public/AdminLTE/js/plugins/fullcalendar/fullcalendar.min.js',
	'public/AdminLTE/js/plugins/datatables/jquery.dataTables.js',
	'public/AdminLTE/js/plugins/datatables/dataTables.bootstrap.js',
	'public/AdminLTE/js/plugins/iCheck/icheck.js',
	'public/AdminLTE/js/AdminLTE/app.js'
], 'public/js/theme.js');

mix
   .sass('resources/assets/sass/app.scss', 'public/css');
