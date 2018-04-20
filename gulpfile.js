var gulp = require('gulp');
var sass = require('gulp-sass');

var cssDestination = 'style';
var cssInputFile = 'source/style.scss';
var watchedFiles = 'source/**/*.scss';

gulp.task('buildcss', function () {
    return gulp.src(cssInputFile)
        .pipe(sass({
            outputStyle: 'compressed'
        }))
    .pipe(gulp.dest(cssDestination));
});

gulp.task('watch', function () {
    gulp.watch(watchedFiles,['buildcss']);
});