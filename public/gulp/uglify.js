var uglify = require("gulp-uglify");
var rename = require("gulp-rename");
var wait = require('gulp-wait');
var gulpif = require('gulp-if');

module.exports = (gulp, callback) => {
  const uglifyJsTask = function() {
    return gulp
      .src(["**/*.js", "!**/*.min.js", "!**/sweet-alerts.js"], {
        cwd: config.destination.js
      })
      .pipe(gulpif(process.env.NODE_ENV === 'production', uglify()))
      .on("error", function(err) {
        console.log("\x1b[31m", err.toString());
      })
      .pipe(rename({ suffix: ".min" }))
      .pipe(gulp.dest(config.destination.js));
  };

  return {
    js: uglifyJsTask
  };
};
