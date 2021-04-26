const serve = require("./serve")();

module.exports = (gulp, callback) => {
  const HTMLWatchTask = function() {
    return gulp.watch(
      `${config.source.html}/**/*.html`,
      gulp.series(serve.reload)
    );
  };

  return {
    watch: HTMLWatchTask
  };
};
