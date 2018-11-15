/**
 * Commands :
 * gulp --service=dev jshint
 * gulp --service=production
 *
 * References :
 * https://scotch.io/tutorials/automate-your-tasks-easily-with-gulp-js
 * http://andy-carter.com/blog/a-beginners-guide-to-the-task-runner-gulp
 */
var gulp = require('gulp'),
    gutil = require('gulp-util'),
    jshint = require('gulp-jshint'),
    sass = require('gulp-sass'),
    minifyCss = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    sourcemaps = require('gulp-sourcemaps'),

    paths = {
        src: {
            'css': [
                'node_modules/loaders.css/loaders.css',
                'node_modules/fotorama/fotorama.css',
                'resources/css/**/*.css',
                'resources/scss/**/*.scss'
            ],
            'js': [
                'node_modules/fotorama/fotorama.js',
                'resources/js/**/*.js'
            ]
        },
        dist: {
            'css': 'public/assets/css',
            'js': 'public/assets/js'
        }
    };

/*/ Copy all other files to dist directory
gulp.task('copy', function () {
    // Copy JS
    gulp.src(paths.lib.js)
        .pipe(gulp.dest(paths.src.js));
    // Copy CSS
    gulp.src(paths.lib.css)
        .pipe(gulp.dest(paths.src.css));
});*/

// configure the jshint task
gulp.task('jshint', function () {
    return gulp.src(paths.src.js)
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'));
});

function minifyIfNeeded() {
    return gutil.env.service == 'production' ? uglify() : gutil.noop()
}

// compile scss to css
gulp.task('build-css', function () {
    return gulp.src(paths.src.css)
        .pipe(sourcemaps.init())    // Process the original sources
        .pipe(sass())
        .pipe(concat('all.css'))
        .pipe(gutil.env.service == 'production' ? minifyCss() : gutil.noop())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write())   // Add the map to modified source.
        .pipe(gulp.dest(paths.dist.css));
});

// concat js, minify if --service production
gulp.task('build-js', function () {
    return gulp.src(paths.src.js)
        .pipe(sourcemaps.init())
        .pipe(concat('all.js'))
        // Only uglify if gulp is ran with '--service production'
        .pipe(minifyIfNeeded())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.dist.js));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function () {
    gulp.watch(paths.src.js, ['jshint', 'build-js']);
    gulp.watch(paths.src.css, ['build-css']);
});

// define the default task and the watch task to it
gulp.task('default', ['jshint', 'build-js', 'build-css']);