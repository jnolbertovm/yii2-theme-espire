import gulp from 'gulp';
import sass from 'gulp-sass';
import css from 'gulp-clean-css';
import rename from 'gulp-rename';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';

gulp.task('js', () => {
    return gulp.src(['./src/scripts/app.js'])
            .pipe(uglify())
            .pipe(rename({suffix: ".min"}))
            .pipe(gulp.dest('./dist/js'));
});

gulp.task('sass', (cb) => {
    return gulp.src(['./src/styles/scss/app.scss'])
            .pipe(sass())
            .pipe(css({compatibility: 'ie8'}))
            .pipe(rename({suffix: ".min"}))
            .pipe(gulp.dest('./dist/css'));
});

gulp.task('default', ['sass', 'js:base', 'js', 'materialize:fonts']);