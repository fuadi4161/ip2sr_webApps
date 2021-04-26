let cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename")
var gulpif = require('gulp-if');

module.exports = (gulp, callback) => {

  const cssMinTask = function() {
    return gulp
      .src(["**/*.css", "!**/*.min.css"], { cwd: config.destination.css })
      .pipe(gulpif(process.env.NODE_ENV === 'production', cleanCSS({inline: ['all']})))
      .pipe(rename({ suffix: ".min" }))
      .pipe(gulp.dest(config.destination.css))
  }


  return {
    css: cssMinTask
  }
}
