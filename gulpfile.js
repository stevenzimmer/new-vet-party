var gulp 			= require('gulp'),
	watch 			= require('gulp-watch'),
	postcss 		= require('gulp-postcss'),
	autoprefixer 	= require('autoprefixer'),
	cssvars 		= require('postcss-simple-vars'),
	nested 			= require('postcss-nested'),
	cssimport		= require('postcss-import'),
	cleanCss 		= require('gulp-clean-css'),
	rename			= require('gulp-rename');


gulp.task( 'php', function() {
	console.log( 'php ran' );
});

gulp.task( 'styles', function() {
	return gulp.src('style.css')
	.pipe(postcss(
		[cssimport, cssvars, nested, autoprefixer]
	))
	.pipe(cleanCss({
		compatibility: 'ie8',
		debug: true
	}))
	.pipe(rename('style.min.css'))
	.pipe(gulp.dest('./app/dist/style'));
});

gulp.task( 'watch', function() {

	gulp.watch('./*.php', ['php']);

	gulp.watch(['style.css', './app/dist/style/**/*.css'], ['styles']);

});


gulp.task('default', ['styles', 'php', 'watch']);