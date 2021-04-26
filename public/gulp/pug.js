var pug = require("gulp-pug");
var htmlbeautify = require("gulp-html-beautify");
var fs = require("fs");
var through = require("through2");
var prependFile = require("prepend-file");
var clean = require("gulp-clean");
data = require('gulp-data');
const serve = require("./serve")();

module.exports = (gulp, callback) => {
  const pugCompileTask = () => {
    return gulp
      .src("templates/views/**/*.pug")
      .pipe(data(function(file) {
        const templateData = JSON.parse(fs.readFileSync("templates/layouts/shared/data.json"));
        templateData.env = process.env.NODE_ENV;
        return templateData;
      }))
      .pipe(
        pug({
          pretty: true
        })
      )
      .pipe(htmlbeautify({}))
      .pipe(gulp.dest("html"));
  };

  // Tasks for building PUG template
  const cleanViewTask = () => {
    if (!fs.existsSync(`templates/views/`)){
      fs.mkdirSync(`templates/views/`);
    }
    return gulp.src(`templates/views/`).pipe(clean());
  };
  const copyViewTask = () => {
    return gulp
      .src("**/*.pug", {
        cwd: "templates/body-content"
      })
      .pipe(gulp.dest("templates/views"));
  };
  const renameLayoutDirTask = done => {
    fs.rename(
      "templates/views/layout-name",
      `templates/views/${buildOptions.layout}`,
      function(err) {
        if (err) {
          throw err;
        }
        done();
      }
    );
  };
  const writeViewTask = () => {
    return gulp.src(`templates/views/${buildOptions.layout}/**/*.pug`).pipe(
      through.obj(function(file, enc, cb) {
        prependFile(
          file.path,
          `extends ../../layouts/${buildOptions.layout}/${buildOptions.layout}.pug \n`,
          cb
        );
        // cb(null, file);
      })
    );
  };

  const pugBuildTemplates = gulp.series(
    cleanViewTask,
    copyViewTask,
    renameLayoutDirTask,
    writeViewTask
  );

  const pugWatchTask = () => {
    return gulp.watch(
      ["templates/**/*.pug", "!templates/views/**"],
      gulp.series(pugBuildTemplates, pugCompileTask, serve.reload)
    );
  };

  return {
    compile: pugCompileTask,
    buildTemplates: pugBuildTemplates,
    watch: pugWatchTask
  };
};
