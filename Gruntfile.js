module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }
    },
	concat: {
		js:{
			src: ["src/**/*.js"],
			dest: "build/scripts.js",
		},	
		css:{
			src: ["src/**/*.css"],
			dest: "build/styles.css",
		}
	},
	watch: {
		js: {
			files: ['src/**/*.js'],
			tasks: ['concat'],
		},
		css: {
			files: ['src/**/*.css'],
			tasks: ['concat'],
		},
	},
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['concat','watch']);

};