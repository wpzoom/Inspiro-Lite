module.exports = function (grunt) {
	'use strict';

	const autoprefixer = require('autoprefixer');
	// const flexibility = require('postcss-flexibility');
	const sass = require('sass');

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		jshint: {
			options: {
				globals: {
					wp: true,
					define: true,
				},
				esversion: 6,
				node: true,
				browser: true,
				bitwise: true,
				boss: true,
				eqeqeq: true,
				devel: true,
				jquery: true,
				module: false,
			},
			uses_defaults: [ 'Gruntfile.js' ],
			beforeminify: {
				files: {
					src: [ 'assets/js/unminified/navigation.js' ],
				},
				options: {
					curly: true,
					undef: true,
					eqnull: true,
				},
			},
			// afterminify: {
			//   files: {
			//     src: ['assets/js/minified/*.min.js']
			//   },
			//   options: {
			//     globals: {
			//       wp: true,
			//       define: true,
			//       twentyseventeenScreenReaderText: true
			//     },
			//     curly: false,
			//     undef: true,
			//     eqeqeq: false,
			//     eqnull: true,
			//     expr: true,
			//     asi: true
			//   }
			// },
		},

		rtlcss: {
			options: {
				// rtlcss options
				config: {
					preserveComments: true,
					greedy: true,
				},
				// generate source maps
				map: false,
			},
			dist: {
				files: [
					{
						expand: true,
						cwd: 'assets/css/unminified/',
						src: [
							'*.css',
							'!*-rtl.css',
							'!colors-dark.css',
							'!customize-controls.css',
							'!welcome-notice.css',
						],
						dest: 'assets/css/unminified',
						ext: '-rtl.css',
					},
					{
						expand: true,
						cwd:
							'inc/customizer/custom-controls/assets/css/unminified/',
						src: [ '*.css', '!*-rtl.css' ],
						dest:
							'inc/customizer/custom-controls/assets/css/unminified/',
						ext: '-rtl.css',
					},
				],
			},
		},

		sass: {
			options: {
				implementation: sass,
				sourcemap: false,
				outputStyle: 'expanded',
				linefeed: 'lf',
				indentWidth: 4,
			},
			dist: {
				files: [
					{
						'assets/css/unminified/style.css': 'scss/style.scss',
						'assets/css/unminified/editor-style.css':
							'scss/editor-style.scss',
						'assets/css/unminified/colors-dark.css':
							'scss/colors-dark.scss',
						'assets/css/unminified/customize-controls.css':
							'scss/customize-controls.scss',
						'assets/css/unminified/welcome-notice.css':
							'scss/admin/welcome-notice.scss',
						'assets/css/unminified/admin.css':
							'scss/admin/admin.scss',
					},
					{
						expand: true,
						cwd: 'scss/schemes',
						src: ['*.scss'],
						dest: 'styles',
						ext: '.css',
					},
				],
			},
		},

		postcss: {
			options: {
				map: false,
				processors: [
					// flexibility,
					autoprefixer({
						overrideBrowserslist: [
							'> 1%',
							'ie >= 11',
							'last 1 Android versions',
							'last 1 ChromeAndroid versions',
							'last 2 Chrome versions',
							'last 2 Firefox versions',
							'last 2 Safari versions',
							'last 2 iOS versions',
							'last 2 Edge versions',
							'last 2 Opera versions',
						],
						cascade: false,
					}),
				],
			},
			style: {
				expand: true,
				src: ['style.css', 'assets/css/unminified/*.css'],
			},
		},

		uglify: {
			js: {
				files: [
					{
						expand: true,
						src: [ '**.js' ],
						dest: 'assets/js/minified',
						cwd: 'assets/js/unminified',
						ext: '.min.js',
					},
					{
						expand: true,
						src: [ '**.js' ],
						dest:
							'inc/customizer/custom-controls/assets/js/minified',
						cwd:
							'inc/customizer/custom-controls/assets/js/unminified',
						ext: '.min.js',
					},
				],
			},
		},

		watch: {
			gruntfile: {
				files: 'Gruntfile.js',
				tasks: [ 'jshint' ],
				options: {
					reload: true,
				},
			},
			scripts: {
				files: [
					'assets/js/unminified/*.js',
					'inc/customizer/custom-controls/**/*.js',
				],
				tasks: [ 'jshint:uses_defaults', 'concat', 'minify' ],
				options: {
					livereload: true,
				},
			},
			sassStyles: {
				files: [ 'scss/**/*.scss' ],
				tasks: [ 'style', 'clean:minifiedCSS', 'cssmin:css' ],
			},
			livereload: {
				files: [ 'style.css' ],
				options: {
					livereload: true,
				},
			},
		},

		cssmin: {
			options: {
				specialComments: 0,
			},
			css: {
				files: [
					// Generated '.min.css' files from '.css' files.
					{
						expand: true,
						src: [ '**/*.css' ],
						dest: 'assets/css/minified',
						cwd: 'assets/css/unminified',
						ext: '.min.css',
					},
					{
						expand: true,
						src: [ '**/*.css' ],
						dest:
							'inc/customizer/custom-controls/assets/css/minified',
						cwd:
							'inc/customizer/custom-controls/assets/css/unminified',
						ext: '.min.css',
					},
					{
						src: [
							'inc/customizer/custom-controls/assets/css/unminified/*.css',
							'!inc/customizer/custom-controls/assets/css/unminified/*-rtl.css',
						],
						dest:
							'inc/customizer/custom-controls/assets/css/minified/custom-controls.min.css',
					},
				],
			},
		},

		clean: {
			main: [ '<%= pkg._project.slug %>' ],
			zip: [ '*.zip' ],
			minifiedJS: [
				'assets/js/minified/*',
				'inc/customizer/custom-controls/assets/js/minified/*',
			],
			minifiedCSS: [
				'assets/css/minified/*',
				'inc/customizer/custom-controls/assets/css/minified/*',
			],
		},
	});

	// Load grunt tasks.
	grunt.loadNpmTasks( 'grunt-rtlcss' );
	grunt.loadNpmTasks( 'grunt-sass' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( '@lodder/grunt-postcss' );
	grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
	grunt.loadNpmTasks( 'grunt-contrib-clean' );
	grunt.loadNpmTasks( 'grunt-contrib-concat' );

	// rtlcss, you will still need to install ruby and sass on your system manually to run this
	grunt.registerTask( 'rtl', [ 'rtlcss' ] );

	// SASS compile
	grunt.registerTask( 'scss', [ 'sass' ] );

	// Style
	grunt.registerTask( 'style', [ 'scss', 'postcss:style', 'rtl' ] );

	// Lint the "beforeminify" files first, then minify
	grunt.registerTask( 'jshint-before-minify', [
		'jshint:beforeminify',
		'uglify:js',
	] );

	// min all
	grunt.registerTask( 'minify', [
		'style',
		'cssmin:css',
	] );

	// Default task.
	grunt.registerTask( 'default', [
		'minify',
	] );
}
