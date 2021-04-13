# Laravel Breeze without Classes

(In other words, no Tailwind CSS to deal with.)

These are the default Laravel views (using a Laravel Breeze installation) with all TailWind styles and superfluous HTML removed. Everything is ready for you to start styling!

## Installation

Simply overwrite your views/ folder with these files.

Note: Don't forget to remove TailWind from your `webpack.mix.js` configuration. (You will most likely want to replace `.postCSS()` in your webpack.mix.js file with `.sass()`.

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
)
