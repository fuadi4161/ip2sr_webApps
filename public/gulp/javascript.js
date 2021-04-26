var babel = require("gulp-babel");
var browserify = require("browserify");
var babelify = require("babelify");
var babel = require("gulp-babel");
var source = require("vinyl-source-stream");
var buffer = require("vinyl-buffer");
var sourcemaps = require("gulp-sourcemaps");
var util = require("gulp-util");
const serve = require("./serve")();

module.exports = (gulp, callback) => {
  const uglifyTasks = require("./uglify")(gulp);
  const cleanTasks = require("./clean")(gulp);

  const jsCopyTask = function() {
    return gulp
      .src([`**/*.js`, `!app/**/*.js`], {
        cwd: config.source.js
      })
      .pipe(gulp.dest(`${config.destination.js}`));
  };

  const jsCompileTask = function() {
    return gulp
      .src([`**/*.js`, `!app/**/*.js`, `!plugins/**/*.js`], {
        cwd: config.destination.js
      })
      .pipe(
        babel({
          presets: ["@babel/preset-env"]
        })
      )
      .pipe(gulp.dest(`${config.destination.js}`));
  };

  // Bundle app's js files
  const jsAppBundleTask = function() {
    var b = browserify({
      entries: `${config.source.jsEntry}`,
      debug: true,
      transform: [
        babelify.configure({
          presets: ["@babel/preset-env"]
        })
      ]
    });

    var entryFileName = config.source.jsEntry.split("/").pop();

    return b
      .bundle()
      .pipe(source(entryFileName))
      .pipe(buffer())
      .pipe(sourcemaps.init({ loadMaps: true }))
      .on("error", util.log)
      .pipe(sourcemaps.write("./"))
      .pipe(gulp.dest(config.destination.js));
  };

  const jsWatchTask = function() {
    return gulp.watch(
      `${config.source.js}/**/*.js`,
      gulp.series(
        cleanTasks.js,
        jsAppBundleTask,
        jsCopyTask,
        jsCompileTask,
        uglifyTasks.js,
        serve.reload
      )
    );
  };

  return {
    appBundle: jsAppBundleTask,
    copy: jsCopyTask,
    compile: jsCompileTask,
    watch: jsWatchTask
  };
};
