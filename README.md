# Laravel Breeze without Classes

(In other words, no Tailwind CSS to deal with.)

These are the default Laravel views (using a Laravel Breeze installation) with all TailWind styles and superfluous HTML removed. No CSS is supplied at all. Everything is ready for you to start styling!

## Installation

Simply overwrite your `resources/views` folder in a fresh Laravel installation with the one supplied here. You will be good to go!

Note: Don't forget to remove TailWind from your `webpack.mix.js` configuration. You will most likely want to replace `.postCSS()` in your webpack.mix.js file with `.sass()`.

For example:

```javascript
  mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: 'http://localhost:8000/',
        notify: false
    })
    .disableNotifications()
    .version();
```

