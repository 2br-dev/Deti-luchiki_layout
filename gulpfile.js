const gulp 				= require('gulp');
const nodeSass 			= require('node-sass');
const gulpSass			= require('gulp-sass');
const sass				= gulpSass(nodeSass);
const babelify			= require('babelify');
const source			= require('vinyl-source-stream');
const browserify		= require('browserify');
const include			= require('gulp-file-include');

const browserSyncLocal	= require('browser-sync').init({
	server: {
		baseDir: "./release/"
	}
});

const browserSyncLive	= require('browser-sync').init({
	proxy: {
		target: "http://deti-luchiki.local"
	}
})

const browserSync = browserSyncLocal;

gulp.task('html', () => {
	return gulp.src('./src/html/**/*.html')
		.pipe(include())
		.pipe(gulp.dest('./release/'))
		.pipe(browserSync.stream())
})

gulp.task('css', () => {
	return gulp.src('./src/scss/**/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('./release/css/'))
		.pipe(browserSync.stream())
})

gulp.task('js', () => {
	return browserify({entries: './src/js/master.js'})
		.transform(babelify.configure({
			presets: ['@babel/preset-env']
		}))
		.bundle()
		.pipe(source('master.js'))
		.pipe(gulp.dest('./release/js'))
		.pipe(browserSync.stream())
})

gulp.task('watch', () => {
	gulp.watch('./src/scss/**/*.scss', gulp.series('css'));
	gulp.watch('./src/html/**/*.html', gulp.series('html'));
	gulp.watch('./src/js/*.js', gulp.series('js'));
})