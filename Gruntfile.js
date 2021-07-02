module.exports = function ( grunt ) {
	'use strict';

	const autoprefixer = require( 'autoprefixer' );
	const flexibility = require( 'postcss-flexibility' );
	const sass = require( 'node-sass' );

	// Project configuration.
	grunt.initConfig( {
		pkg: grunt.file.readJSON( 'package.json' ),

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
						src: [ '*.scss' ],
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
					flexibility,
					autoprefixer( {
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
					} ),
				],
			},
			style: {
				expand: true,
				src: [ 'style.css', 'assets/css/unminified/*.css' ],
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

		wp_readme_to_markdown: {
			your_target: {
				files: {
					'README.md': 'readme.txt',
				},
			},
		},

		makepot: {
			target: {
				options: {
					domainPath: '/languages',
					potFilename: '<%= pkg._project.textdomain %>.pot',
					potHeaders: {
						poedit: true,
						'x-poedit-keywordslist': true,
					},
					type: 'wp-theme',
					updateTimestamp: true,
				},
			},
		},

		addtextdomain: {
			options: {
				textdomain: '<%= pkg._project.textdomain %>',
				updateDomains: [ 'twentyseventeen', 'inspiro-lite', 'wpzoom' ],
			},
			target: {
				files: {
					src: [
						'*.php',
						'**/*.php',
						'!node_modules/**',
						'!tests/**',
						'!docs/**',
						'!vendor/**',
					],
				},
			},
		},

		copy: {
			main: {
				options: {
					mode: true,
				},
				src: [
					'**',
					'!node_modules/**',
					'!build/**',
					'!css/sourcemap/**',
					'!.git/**',
					'!.github/**',
					'!bin/**',
					'!.gitlab-ci.yml',
					'!cghooks.lock',
					'!tests/**',
					'!phpunit.xml.dist',
					'!*.sh',
					'!*.map',
					'!Gruntfile.js',
					'!package.json',
					'!package-lock.json',
					'!.gitignore',
					'!phpunit.xml',
					'!README.md',
					'!sass/**',
					'!vendor/**',
					'!composer.json',
					'!composer.lock',
					'!phpcs.xml.dist',
				],
				dest: '<%= pkg.name %>/',
			},
		},

		clean: {
			main: [ '<%= pkg.name %>' ],
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

		compress: {
			main: {
				options: {
					archive: '<%= pkg.name %>-<%= pkg.version %>.zip',
					mode: 'zip',
				},
				files: [
					{
						src: [ './<%= pkg.name %>/**' ],
					},
				],
			},
		},

		bumpup: {
			options: {
				updateProps: {
					pkg: 'package.json',
				},
			},
			file: 'package.json',
		},

		replace: {
			theme_main: {
				src: [ 'style.css', 'readme.txt' ],
				overwrite: true,
				replacements: [
					{
						from: /Version: \bv?(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)(?:-[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?(?:\+[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?\b/g,
						to: 'Version: <%= pkg.version %>',
					},
				],
			},

			theme_const: {
				src: [ 'functions.php' ],
				overwrite: true,
				replacements: [
					{
						from: /INSPIRO_THEME_VERSION', '.*?'/g,
						to: "INSPIRO_THEME_VERSION', '<%= pkg.version %>'",
					},
				],
			},

			theme_function_comment: {
				src: [
					'*.php',
					'**/*.php',
					'!node_modules/**',
					'!php-tests/**',
					'!bin/**',
				],
				overwrite: true,
				replacements: [
					{
						from: 'x.x.x',
						to: '<%= pkg.version %>',
					},
				],
			},

			scripts: {
				src: [
					'*.js',
					'**/*.js',
					'!Gruntfile.js',
					'!node_modules/**',
					'!bin/**',
				],
				overwrite: true,
				replacements: [
					{
						from: 'x.x.x',
						to: '<%= pkg.version %>',
					},
				],
			},

			changelog: {
				src: [ 'readme.txt' ],
				overwrite: true,
				replacements: [
					{
						from: 'x.x.x',
						to: '<%= pkg.version %>',
					},
				],
			},

			theme_based_replace: {
				src: [
					'**',
					'!node_modules/**',
					'!build/**',
					'!css/sourcemap/**',
					'!.git/**',
					'!.github/**',
					'!bin/**',
					'!.gitlab-ci.yml',
					'!cghooks.lock',
					'!tests/**',
					'!phpunit.xml.dist',
					'!*.sh',
					'!*.map',
					'!Gruntfile.js',
					'!package.json',
					'!package-lock.json',
					'!.gitignore',
					'!phpunit.xml',
					'!README.md',
					'!sass/**',
					'!vendor/**',
					'!composer.json',
					'!composer.lock',
					'!phpcs.xml.dist',
					'!assets/images/**',
					'!style.css',
				],
				overwrite: true,
				replacements: [
					{
						from: '<%= pkg._forkProject.subpackage =>',
						to: '<%= pkg._project.subpackage %>',
					},
					{
						from: '<%= pkg._forkProject.name %=>',
						to: '<%= pkg._project.name %>',
					},
					{
						from: '<%= pkg._forkProject.slug %=>',
						to: '<%= pkg._project.slug %>',
					},
					{
						from: '@package <%= pkg._forkProject.package %=>',
						to: '@package <%= pkg._project.package %>',
					},
					{
						from: '@subpackage <%= pkg._forkProject.subpackage %=>',
						to: '@subpackage <%= pkg._project.subpackage %>',
					},
					{
						from: /@since <%= pkg._forkProject.name %=> \bv?(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)(?:-[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?(?:\+[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?\b/g,
						to: '@since <%= pkg._project.name %> x.x.x',
					},
					{
						from: /@version \bv?(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)(?:-[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?(?:\+[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?\b/g,
						to: '@version x.x.x',
					},
				],
			},
		},

		concat: {
			options: {
				separator: '\n',
				banner:
					'/*! <%= pkg.author %>\n' +
					' * <%= pkg.name %> - v<%= pkg.version %>\n' +
					' * Author website: https://wpzoom.com/\n' +
					' * This file is automatically created! Do not edit this file directly!' +
					' */\n',
			},
			dist: {
				files: [
					{
						src: [ 'assets/js/unminified/vendor/*.js' ],
						dest: 'assets/js/unminified/plugins.js',
					},
					{
						src: [
							'inc/customizer/custom-controls/typography/typography.js',
							'inc/customizer/custom-controls/typography/selectWoo.js',
						],
						dest:
							'inc/customizer/custom-controls/assets/js/unminified/custom-controls.js',
					},
					{
						src: [
							'assets/js/unminified/global.js',
							'assets/js/unminified/navigation.js',
							'assets/js/unminified/custom-header-vimeo.js',
						],
						dest: 'assets/js/unminified/scripts.js',
					},
				],
			},
		},

		json2php: {
			options: {
				// Task-specific options go here.
				compress: true,
				// eslint-disable-next-line no-unused-vars
				cover( phpArrayString, destFilePath ) {
					return (
						'<?php\n/**\n * Google fonts array file.\n *\n * @package     Inspiro\n * @author      WPZOOM\n * @copyright   Copyright (c) 2021, WPZOOM\n * @link        https://wpzoom.com\n * @since       Inspiro_Lite x.x.x\n */\n\n/**\n * Returns google fonts array\n *\n * @since x.x.x\n */\nreturn ' +
						phpArrayString +
						';\n'
					);
				},
			},
			your_target: {
				files: {
					'inc/google-fonts.php': 'assets/fonts/google-fonts.json',
				},
			},
		},
	} );

	// Load grunt tasks.
	grunt.loadNpmTasks( 'grunt-rtlcss' );
	grunt.loadNpmTasks( 'grunt-sass' );
	grunt.loadNpmTasks( '@lodder/grunt-postcss' );
	grunt.loadNpmTasks( 'grunt-contrib-uglify-es' );
	grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( 'grunt-contrib-jshint' );
	grunt.loadNpmTasks( 'grunt-contrib-copy' );
	grunt.loadNpmTasks( 'grunt-contrib-clean' );
	grunt.loadNpmTasks( 'grunt-contrib-compress' );
	grunt.loadNpmTasks( 'grunt-contrib-concat' );
	grunt.loadNpmTasks( 'grunt-wp-readme-to-markdown' );
	grunt.loadNpmTasks( 'grunt-wp-i18n' );
	grunt.loadNpmTasks( 'grunt-bumpup' );
	grunt.loadNpmTasks( 'grunt-text-replace' );
	grunt.loadNpmTasks( 'grunt-json2php' );

	// Register Tasks.

	// Bump Version - `grunt version-bump --ver=<version-number>`
	// eslint-disable-next-line no-unused-vars
	grunt.registerTask( 'version-bump', function ( ver ) {
		let newVersion = grunt.option( 'ver' );

		if ( newVersion ) {
			newVersion = newVersion ? newVersion : 'patch';

			grunt.task.run( 'bumpup:' + newVersion );
			grunt.task.run(
				'replace:theme_main',
				'replace:theme_const',
				'replace:theme_function_comment',
				'replace:changelog',
				'replace:scripts',
				'readme'
			);
		}
	} );

	grunt.registerTask( 'download-google-fonts', function () {
		const done = this.async();
		// eslint-disable-next-line import/no-extraneous-dependencies
		const request = require( 'request' );
		const fs = require( 'fs' );

		request(
			'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyCjpo9bj5Y08pYGwheAu8rubIWB8fP3ALQ',
			function ( error, response, body ) {
				if ( response && response.statusCode === 200 ) {
					const fonts = JSON.parse( body ).items.map( function (
						font
					) {
						return {
							[ font.family ]: {
								variants: font.variants,
								category: font.category,
							},
						};
					} );

					fs.writeFile(
						'assets/fonts/google-fonts.json',
						JSON.stringify( fonts, undefined, 4 ),
						function ( err ) {
							if ( ! err ) {
								// eslint-disable-next-line no-console
								console.log( 'Google Fonts Updated!' );
								done();
							}
						}
					);
				}
			}
		);
	} );

	// Update google Fonts
	grunt.registerTask( 'google-fonts', function () {
		grunt.task.run( 'download-google-fonts' );
		grunt.task.run( 'json2php' );
	} );

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
		'jshint-before-minify',
		'style',
		'cssmin:css',
	] );

	// Default task.
	grunt.registerTask( 'default', [
		'jshint:uses_defaults',
		'concat',
		'minify',
	] );

	// Grunt release - Create installable package of the local files
	grunt.registerTask( 'release', [
		'clean:zip',
		'copy:main',
		'compress:main',
		'clean:main',
	] );

	// Generate Read me file
	grunt.registerTask( 'readme', [ 'wp_readme_to_markdown' ] );

	// i18n
	grunt.registerTask( 'i18n', [ 'addtextdomain', 'makepot' ] );

	// Find and replace 'twentyseventeen' to the name of our theme in all the template files
	grunt.registerTask( 'theme-based-replace', [
		'replace:theme_based_replace',
	] );

	grunt.util.linefeed = '\n';
};
