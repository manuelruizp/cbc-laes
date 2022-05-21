const { src, dest, watch, series } = require('gulp');
const gulp_sass = require('gulp-sass')(require('sass'));
const gulp_postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const browser_sync = require('browser-sync').create();

function scssTask() {
    return src('scss/*.scss', { sourcemaps: true })
        .pipe(gulp_sass())
        .pipe(gulp_postcss([cssnano()]))
        .pipe(dest('./css', { sourcemaps: '.' }));
}

function browsersyncInit(cb) {
    browser_sync.init({
        proxy: 'cbc-laes.localhost',
        browser: 'chrome',
    });
    cb();
}

function browsersyncReload(cb) {
    browser_sync.reload();
    cb();
}

function watchTask() {
    watch('application/views/**/*.php', browsersyncReload);
    watch(
        [
            'scss/*.scss',
        ],
        series(scssTask, browsersyncReload)
    );
    watch(
        [
            'js/**/*.js'
        ],
        series(browsersyncReload)
    );

}

exports.default = series(
    scssTask,
    browsersyncInit,
    browsersyncReload,
    watchTask
);