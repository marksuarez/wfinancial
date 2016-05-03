var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');

var input = 'scss/**/*.scss';
var output = '';

gulp.task('styles', function() {
	return gulp
	.src(input)
	.pipe(sourcemaps.init())
	.pipe(sass().on('error', sass.logError))
	.pipe(cleanCSS({compatibility: 'ie8'}))
	.pipe(sourcemaps.write('./maps'))
	.pipe(gulp.dest(output))
});

//Watch task
gulp.task('default',function() {
	gulp.watch('scss/**/*.scss',['styles']);
});