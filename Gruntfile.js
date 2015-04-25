module.exports = function(grunt) {
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    webpack: {
      all: require('./webpack.config')
    },
    watch: {
      assets: {
        files: ['public/UI/**/*.*']
      },
      options: {
        livereload: true
      }
    }
  });

  grunt.registerTask('default', ['webpack', 'watch']);
};