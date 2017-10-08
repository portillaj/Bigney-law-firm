const gulp = require("gulp");
const connect = require('gulp-connect-php');
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass");

//Compile Sass & Inject into browserSync
gulp.task('sass', function(){
  return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'])
  .pipe(sass())
  .pipe(gulp.dest("src/css"))
  .pipe(browserSync.stream());
});

//move js files to src/js
gulp.task('js', function(){
  return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js',
'node_modules/popper.js/dist/umd/popper.min.js'])
.pipe(gulp.dest("src/js"))
.pipe(browserSync.stream());
});

//Watch Sass & Server
gulp.task('serve', ['sass'], function(){
  browserSync.init({
    server: "http://localhost:81/Bigney-law-firm/src/"
  });

  gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], ['sass']);
  gulp.watch(['src/*.php']).on('change', browserSync.reload);
});

//Move Fonts folder to src
gulp.task('fonts', function(){
  return gulp.src('node_modules/font-awesome/fonts/*')
  .pipe(gulp.dest("src/fonts"));
});

//Move Fonts awesome css to src/css
gulp.task('fa', function(){
  return gulp.src('node_modules/font-awesome/css/font-awesome.min.css')
  .pipe(gulp.dest("src/css"));
});

gulp.task('default', ['js', 'serve', 'fa', 'fonts']);
