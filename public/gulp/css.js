var concat = require("gulp-concat");

module.exports = (gulp, callback) => {
  const cssPluginCopyTask = function() {
    return gulp
      .src(`${config.bundle.css.plugin.source}/**/*`, { allowEmpty: true })
      .pipe(gulp.dest(`${config.destination.css}/plugins`));
  };

  // Bundle Third party css
  const cssPluginConcatTask = function() {
    return gulp
      .src(config.bundle.css.plugin.files, {
        cwd: `${config.bundle.css.plugin.source}`,
        allowEmpty: true
      })
      .pipe(concat("third-party.bundle.css"))
      .pipe(gulp.dest(config.destination.css));
  };

  return {
    pluginConcat: cssPluginConcatTask,
    pluginCopy: cssPluginCopyTask
  };
};
