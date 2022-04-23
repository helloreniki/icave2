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

 mix
 // .js('resources/js/app.js', 'public/js')

 .postCss('resources/css/app.css', 'public/css')
 .options({
   postCss: [
     require("tailwindcss"),
   ]
 })

 // .postCss('resources/css/app.css', 'public/css', [
 //   require('tailwindcss'),
 // ])

 .browserSync({
   proxy: "http://icave2.test",
   files: [
     // 'public/js/app.js',
     'public/css/app.css',
     './resources/views/**/*.blade.php',
   ],
   // reloadDelay: 500, // wait one second before reloading
   ghostMode: true, // switch all sync off (clicks, forms, scroll)
   reloadOnRestart: true, // reload all browsers on restart
   host: "192.168.8.103", // if you know your url already
   notify: false, // no grey box notifications
   ui: false, // disable 3001 ui page
   online: true, // if you know you have internet connection
   open: false // don't open browser automatically
 })
 .version()
 .disableNotifications()
;
