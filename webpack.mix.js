const mix = require('laravel-mix');
const local = require('./local');
const glob = require('glob-all');
require('laravel-mix-versionhash');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.setPublicPath('./build');

mix.webpackConfig({
    externals: {
        "jquery": "jQuery",
    }
});

if (local.proxy) {
    mix.browserSync({
        proxy: local.proxy,
        injectChanges: true,
        open: false,
        files: [
            'build/**/*.{css,js,woff}'
        ]
    });
}
 
mix.tailwind();

mix.js('assets/js/app.js', 'js');
mix.sass('assets/scss/app.scss', 'css').options({ processCssUrls: false}); 
mix.copy('assets/svg', 'build/svg');
mix.copy('assets/font', 'build/font');


// The package internally limits running to production builds so we don't need
// to wrap this up with a condition.
mix.purgeCss({
    paths: () => glob.sync([
        path.join(__dirname, '*.php'), 
        path.join(__dirname, 'templates/**/*.php'),
        path.join(__dirname, 'woocommerce/**/*.php'), 
        path.join(__dirname, 'inc/*.php'),
        path.join(__dirname, 'build/js/**/*.js'),
    ]),
    whitelist: ['current-menu-item','current-menu-parent','fixed' ],
    // whitelistPatterns: [/^search-/],
    // whitelistPatternsChildren: [/^search-/,/^social-media/,/^single-dentalservices/,/^everest-forms/,/^wp-block-/,/^qubely-/,/^page-template-page-about-us/,/^page/,/^textwidget/]
    whitelistPatternsChildren: [/^search-/,/^social-media/,/^everest-forms/,/^page/,/^single/,/^textwidget/]
     
});

// if (mix.inProduction()) {
//    mix.versionHash();
//      mix.version(['build/js/random.js']); 
// }

