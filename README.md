# Laravel Breeze without Classes

(In other words, no Tailwind classes to deal with.)

These are the default Laravel views (using a fresh Laravel Breeze installation) with all TailWind styles and superfluous HTML removed. No CSS is supplied at all. Everything is stripped bare and ready for you to start styling!

Supports **Laravel 9 / 10** with Vite

## Installation

Simply overwrite your `resources/views` folder in a fresh Laravel installation with the one supplied here. You will be good to go!

Note: Don't forget to remove the TailWind imports from your `resources/app.scss`. 

### Webpack users
If you're using Webpack, remove Tailwind from your `webpack.mix.js` configuration. You will most likely want to replace `.postCSS()` in your webpack.mix.js file with `.sass()`.

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

