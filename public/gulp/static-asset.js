const serve = require("./serve")();

module.exports = (gulp, callback) => {
  const fontsCopyTask = function() {
    return gulp
      .src(`fonts/**/*`, {
        cwd: config.source.path
      })
      .pipe(gulp.dest(`${config.destination.path}/fonts`));
  };

  const imagesCopyTask = function() {
    return gulp
      .src(`images/**/*`, {
        cwd: config.source.path
      })
      .pipe(gulp.dest(`${config.destination.path}/images`));
  };

  const assetsCopyTask = gulp.series(fontsCopyTask, imagesCopyTask);

  const assetsWatchTask = function() {
    return gulp.watch(
      [`${config.source.path}/fonts/**/*`, `${config.source.path}/images/**/*`],
      gulp.series(
        assetsCopyTask,
        serve.reload
      )
    );
  };

  return {
    copy: assetsCopyTask,
    watch: assetsWatchTask
  }
}