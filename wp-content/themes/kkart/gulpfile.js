var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed'
};

gulp.task('sass', function() {
    return gulp
        .src('./assets/sass/main.scss') //change this path
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./assets/css/')); //change this path
});

gulp.task('sass-watch', function() {
    return gulp
        .watch('./assets/sass/*.scss', ['sass']); // change this path
});

gulp.task('default', ['sass', 'sass-watch']);