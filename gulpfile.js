var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		imagemin = require('gulp-imagemin'),
		pngquant    = require('imagemin-pngquant'),
		cache       = require('gulp-cache');

gulp.task('img', function() {
    return gulp.src('app/img/**/*')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('app/img'));
});

gulp.task('browser-sync', ['styles', 'scripts'], function() {
		browserSync.init({
				proxy: "fx_new/app",
				// proxy: "http://localhost/Work/FX/app/",
				notify: false
		});
});

gulp.task('styles', function () {
	return gulp.src('scss/*.scss')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.stream());
});

gulp.task('scripts', function() {
	return gulp.src([
		'./app/libs/jquery/jquery-1.11.2.min.js',
		'./app/libs/jquery/jquery.pjax.js',
		'./app/libs/fancyBox/jquery.fancybox.js',
		'./app/libs/plugins-scroll/plugins-scroll.js',
		'./app/libs/slick/slick.min.js',
		'./app/libs/scroll2id/PageScroll2id.min.js',
		'./app/libs/nprogress/nprogress.js'
		])
		.pipe(concat('libs.js'))
		.pipe(gulp.dest('./app/js/'));
});

gulp.task('watch', function () {
	gulp.watch('scss/*.scss', ['styles']);
	gulp.watch('app/libs/**/*.js', ['scripts']);
	gulp.watch('app/js/*.js').on("change", browserSync.reload);
	gulp.watch('app/**/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'watch']);