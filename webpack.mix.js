const mix = require('laravel-mix');

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
/*
mix.js('resources/js/konva.min.js', 'public/make-tactic.js');
mix.js('resources/js/media-queries.js', 'public/make-tactic.js');
mix.js('resources/js/canvas.js', 'public/make-tactic.js');
mix.js('resources/js/frames.js', 'public/make-tactic.js');
*/

mix.scripts([
    'resources/js/konva.min.js',
    'resources/js/media-queries.js',
    'resources/js/canvas.js',
    'resources/js/frames.js'
], 'public/js/make-tactic.js');

mix.js('resources/js/app.js', 'public/js');

mix.scripts([
    'resources/js/anime.min.js',
    'resources/js/animate-tactic.js',
    'resources/js/tactic-settings.js',
], 'public/js/view-tactic.js');

mix.sass('resources/sass/app.scss', 'public/css')
	.options({
        processCssUrls: false
    });
