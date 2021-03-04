const gulp          = require('gulp');
const pump          = require('pump');
const sass          = require('gulp-sass');
const autoprefixer  = require('gulp-autoprefixer');
const sourcemaps    = require('gulp-sourcemaps');

const sassConfig = {
  options: {
    includePaths: [
      'node_modules/foundation-sites/scss',
      'theme/scss'
    ],
    outputStyle: 'compressed'
  }
};

const sassConfigBlocks = {
  options: {
    includePaths: [
      'node_modules/foundation-sites/scss',
      'theme/blocks'
    ],
    outputStyle: 'compressed'
  }
};

gulp.task('sass', (cb) => {
  pump([
      gulp.src('./theme/theme.scss'),
      sourcemaps.init(),
      sass(sassConfig.options),
      autoprefixer({
        overrideBrowserslist: ['last 2 versions', 'ie 10']
      }),
      sourcemaps.write('.'),
      gulp.dest('./theme'),
    ], cb);
});

gulp.task('watch', () => {
  gulp.watch(['theme/theme.scss','theme/scss/*'], ['sass']);
});

gulp.task('sassblocks', (cb) => {
  pump([
      gulp.src('./theme/scss/blocks.scss'),
      sourcemaps.init(),
      sass(sassConfigBlocks.options),
      autoprefixer({
        overrideBrowserslist: ['last 2 versions', 'ie 10']
      }),
      sourcemaps.write('.'),
      gulp.dest('./theme/blocks'),
    ], cb);
});

gulp.task('watchblocks', () => {
  gulp.watch(['theme/scss/blocks.scss','theme/scss/blocks.scss/*'], ['sassblocks']);
});



gulp.task('default', ['watch','sass','watchblocks','sassblocks']);

gulp.task('build', ['sass']);
gulp.task('build', ['sassblocks']);





