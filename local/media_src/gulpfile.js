'use strict';
global.$ = {
	gulp: require('gulp'),
	gulpif: require('gulp-if'),
	sass: require('gulp-sass'),
	autoprefixer: require('gulp-autoprefixer'),
	cleanCSS: require('gulp-clean-css'),
	babel: require('gulp-babel'),
	uglify: require('gulp-uglify'),
	del: require('del'),
	sourcemaps: require('gulp-sourcemaps'),
	rename: require('gulp-rename'),
	plumber: require('gulp-plumber'),
	cheerio: require('gulp-cheerio'),
	imagemin: require('gulp-imagemin'),
	cache: require('gulp-cache'),
	jpegRecompress: require('imagemin-jpeg-recompress'),
	pngQuant: require('imagemin-pngquant'),
	replace: require('gulp-replace'),
	svgSprite: require('gulp-svg-sprite'),
	svgmin: require('gulp-svgmin'),
	concat: require('gulp-concat'),
	combine: require('gulp-scss-combine'),
	browserSync: require('browser-sync').create(),
	tasks: require('./gulp/config/tasks.js'),
	path: require('./gulp/config/path.js'),
	production: false,
	useLocalServer: false
}

$.sass.compiler = require('node-sass');
$.tasks.forEach((taskPath) => require(taskPath)());

$.gulp.task('dev', $.gulp.series('scss', 'js', /*'img',*/ 'sections', 'svg'));
$.gulp.task('beta', $.gulp.series('dev', 'bitrix', 'watch'));
if (!$.production){
	$.gulp.task('common', $.gulp.series(/*'clean', */$.gulp.parallel('html', 'fonts', 'favicon', 'svg'), 'clearCacheLocal'));
	$.gulp.task('default', $.gulp.series('common', $.gulp.parallel('dev'), $.gulp.parallel('watch')));
}
else
	$.gulp.task('default', $.gulp.series('dev', 'bitrix', 'watch'));