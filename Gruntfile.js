module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					style: 'nested'
				},
				files: {
        			'dev/scss/main.css': 'dev/scss/main.scss'
      			}
				/*
				files: [{
					expand: true,
					cwd: 'dev/scss/',
					src: ['*.scss'],
					dest: 'dev/scss/',
					ext: '.css'
				}]
				*/
			}
		},

		autoprefixer: {
			options: {
				browsers: ['last 2 version']
			},
			css: {
				src: 'dev/scss/main.css',
				dest: 'dev/scss/main-prefixed.css'
			}
		},

		cssmin: {
			options: {
				report: 'min'
			},
			combine: {
				files: {
					'style.css': ['dev/scss/main-prefixed.css']
				}
			}
		},

		uglify: {
			options: {
				report: 'min'
			},
			build: {
				files: {
					'js/main.min.js': ['dev/js/plugin.js', 'dev/js/main.js']
				}
			}
		},

		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: 'dev/img/',
					src: ['**/*.{png,PNG,jpg,JPG,gif}'],
					dest: 'img/'
				}]
			}
		},

		watch: {
			options: {
				livereload: true,
			},
			js: {
				files: ['dev/js/*.js'],
				tasks: ['uglify'],
				options: {
					spawn: false,
				}
			},
			css: {
				files: ['dev/scss/**/*.scss', 'dev/scss/*.scss'],
				tasks: ['sass', 'autoprefixer', 'cssmin'],
				options: {
					spawn: false,
				}
			},
			img: {
				files: ['dev/img/**/*.{png,PNG,jpg,JPG,gif}'],
				tasks: ['imagemin'],
				options: {
					spawn: false,
				}
			}
		}

	});


	require('load-grunt-tasks')(grunt);

	grunt.registerTask('default', ['sass', 'autoprefixer', 'cssmin', 'uglify', 'imagemin']);
	grunt.registerTask('dev', ['watch']);


};