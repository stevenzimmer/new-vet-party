var gulp 			= require('gulp'),
	watch 			= require('gulp-watch'),
	postcss 		= require('gulp-postcss'),
	autoprefixer 	= require('autoprefixer'),
	cssvars 		= require('postcss-simple-vars'),
	nested 			= require('postcss-nested'),
	cssimport		= require('postcss-import'),
	cleanCss 		= require('gulp-clean-css'),
	rename			= require('gulp-rename'),
	uglify 			= require('gulp-uglify'),
	webpack			= require('webpack');


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
	.pipe(gulp.dest('./app/style'));
});

gulp.task('js', function() {
	return gulp.src( './app/bundle/*.js' )
		.pipe(uglify())
		.pipe(rename('script.min.js'))
        .pipe(gulp.dest('./app/scripts'))
});

gulp.task('webpack', function(callback) {
	webpack(require('./webpack.config.js'), function() {
		console.log('webpack complete');
		callback();
	});
});

gulp.task( 'watch', function() {

	gulp.watch('./*.php', ['php']);

	gulp.watch('./app/bundle/*.js', ['js']);

	gulp.watch(['style.css', './app/dist/style/**/*.css'], ['styles']);

	gulp.watch('./app/dist/scripts/*.js', ['webpack'])

});


gulp.task('default', ['styles', 'webpack', 'js', 'php', 'watch']);

