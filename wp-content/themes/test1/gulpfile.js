const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');


gulp.task('sass', function(){
    return gulp.src('scss/main.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .on('error', onError)
        .pipe(autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('browser-sync', function () {
    browserSync({
        server: {
            baseDir: 'app'
        },
        notify: false
    });
});

gulp.task('scripts', function() {
    return gulp.src(
        [
            'js/vendor/html5shiv.js',
            'js/vendor/jquery-1.11.2.min.js',
            'js/vendor/fontawesome-markers.min.js',
            'js/vendor/aos.js',
            'js/vendor/waypoints.min.js',
            'js/vendor/jquery.counterup.min.js',
            'js/vendor/main.js'
        ]
    )
        .pipe(concat('main.js'))
        .pipe(uglify())
        .on('error', onError)
        .pipe(gulp.dest('js/'));
});


gulp.task('watch', ['browser-sync', 'sass', 'scripts'], function () {
    gulp.watch('scss/modules/**/*.scss', ['sass']);
    gulp.watch('scss/main.scss', ['sass']);
    gulp.watch('js/vendor/*.js', ['scripts']);
    gulp.watch('*.html', browserSync.reload);
    gulp.watch('js/main.js', browserSync.reload);
    gulp.watch('css/*.css', browserSync.reload({stream: true}));
});


gulp.task('default',['watch']);

function onError(err) {
    console.log(err);
    this.emit('end');
}