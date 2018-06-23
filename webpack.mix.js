const mix = require('laravel-mix');

mix
  .js('resources/assets/js/app.js', 'public/javascripts')
  // .sass('resources/assets/stylus/app.scss', 'public/stylesheets')
  .stylus('resources/assets/stylus/app.styl', 'public/stylesheets', {
    use: [
      require('rupture')()
    ]
  })
  .sourceMaps();

mix.webpackConfig({
  resolve: {
    alias: {
      '~App': resolve(__dirname, 'resources', 'assets', 'js'),
      '~Components': resolve(__dirname, 'resources', 'assets', 'js', 'components')
    }
  }
})
