module.exports = (gulp, callback) => {

  const setDevEnvironment = (done) => {
    process.env.NODE_ENV = 'development';
    done();
  };

  const setProdEnvironment = (done) => {
    process.env.NODE_ENV = 'production';
    done();
  };

  return {
    setDev: setDevEnvironment,
    setProd: setProdEnvironment
  };
};
