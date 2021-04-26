var browserSync = require("browser-sync").create();

module.exports = (gulp, callback) => {

  const browserSyncInit = (done) => {
    browserSync.init({
      server: {
        baseDir: './'
      },
      startPath: `/html/${buildOptions.layout || 'layout1'}/blank.html`
    });
    done();
  };

  const browserSyncReload = (done) => {
    browserSync.reload();
    done();
  }


  return {
    init: browserSyncInit,
    reload: browserSyncReload
  }
}