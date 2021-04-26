var sass = require("gulp-sass");
var tildeImporter = require("node-sass-tilde-importer");

const serve = require("./serve")();

module.exports = (gulp, callback) => {
  const minifyTasks = require("./minify")(gulp);

  const scssCompileTask = function() {
    return gulp
      .src(["**/*.scss", "!plugins/animate.scss/**"], { cwd: config.source.scss })
      .pipe(
        sass({
          importer: tildeImporter
        }).on("error", sass.logError)
      )
      .pipe(gulp.dest(config.destination.css));
  };

  const scssWatchTask = function() {
    return gulp.watch(
      `${config.source.scss}/**/*.scss`,
      gulp.series(scssCompileTask, minifyTasks.css, serve.reload)
    );
  };

  return {
    compile: scssCompileTask,
    watch: scssWatchTask
  };
};
