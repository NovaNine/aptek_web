module.exports = function(grunt) {
	// Time how long tasks take. Can help when optimizing build times
	require('time-grunt')(grunt);
	
	// Project configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		dirs: {
			web: 'www'
		},

		clean: [],
		
		sass_globbing: {
			default: {
				files: {
					'<%= dirs.web %>/css/_imports.scss': '<%= dirs.web %>/css/**/*.scss'
				},
				options: {
					useSingleQuotes: false
				}
			}
		},
	
		sass: {
			default: {
				options: {
					precision: 8,
					sourcemap: 'auto',
					lineNumbers: true,
					style: 'expanded',
					trace: true
				},
				files: {
					'<%= dirs.web %>/css/site.css': '<%= dirs.web %>/css/site.scss'
				}
			}
		},
		
		watch: {
			options: {
				livereload: {
					port: 9999
				}
			},
			sass: {
				files: [
					'<%= dirs.web %>/css/**/*.scss',
					'!<%= dirs.web %>/css/_imports.scss'
				],
				tasks: ['build-sass'],
				options: {
					spawn: false,
					interrupt: true,
					reload: false
				}
			}
		}
	});
	
	// Load the plugins that provides tasks.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-sass-globbing');
	grunt.loadNpmTasks('grunt-contrib-sass');

	// Sass tasks
	grunt.registerTask('build-sass', ['sass_globbing', 'sass']);
	//grunt.registerTask('build-js', ['clean', 'concat', 'uglify', 'copy']);

	// Default task(s).
	grunt.registerTask('default', ['build-sass']);
}