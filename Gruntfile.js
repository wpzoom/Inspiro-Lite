module.exports = function(grunt) {
  'use strict';

  var autoprefixer = require('autoprefixer');
  var flexibility = require('postcss-flexibility');
  var sass = require('node-sass');

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    jshint: {
      options: {
        globals: {
          wp: true,
          define: true
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
      uses_defaults: ['Gruntfile.js'],
      beforeminify: {
        files: {
          src: [
            'assets/js/unminified/navigation.js',
          ]
        },
        options: {
          curly: true,
          undef: true,
          eqnull: true,
        }
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

    // rtlcss: {
    //   options: {
    //     config: {

    //     }
    //   }
    // },

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
          },
          {
            expand: true,
            cwd: 'scss/schemes',
            src: ['*.scss'],
            dest: 'styles',
            ext: '.css',
          }
        ]
      }
    },

    postcss: {
      options: {
        map: false,
        processors: [
          flexibility,
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
              'last 2 Opera versions'
            ],
            cascade: false
          })
        ]
      },
      style: {
        expand: true,
        src: [
          'style.css',
          'assets/css/unminified/*.css',
        ]
      }
    },

    uglify: {
      js: {
        files: [
          {
            expand: true,
            src: [
              '**.js',
            ],
            dest: 'assets/js/minified',
            cwd: 'assets/js/unminified',
            ext: '.min.js'
          }
        ]
      }
    },

    cssmin: {
      options: {
        specialComments: 0
      },
      css: {
        files: [
          // Generated '.min.css' files from '.css' files.
          {
            expand: true,
            src: [
              '**/*.css',
            ],
            dest: 'assets/css/minified',
            cwd: 'assets/css/unminified',
            ext: '.min.css'
          },
        ]
      }
    },

    watch: {
      gruntfile: {
        files: 'Gruntfile.js',
        tasks: ['jshint'],
        options: {
          reload: true
        }
      },
      scripts: {
        files: ['assets/js/unminified/*.js'],
        tasks: ['jshint', 'concat:buildJSPlugins', 'concat:buildJS', 'clean:minifiedJS', 'uglify'],
        options: {
          livereload: true
        }
      },
      sassStyles: {
        files: ['scss/**/*.scss'],
        tasks: ['style', 'clean:minifiedCSS', 'cssmin:css'],
      },
      livereload: {
        files: ['style.css'],
        options: {
          livereload: true
        }
      }
    },

    wp_readme_to_markdown: {
      your_target: {
        files: {
          'README.md': 'readme.txt'
        }
      },
    },

    makepot: {
      target: {
        options: {
          domainPath: '/languages',
          potFilename: '<%= pkg.name %>.pot',
          potHeaders: {
            poedit: true,
            'x-poedit-keywordslist': true
          },
          type: 'wp-theme',
          updateTimestamp: true
        }
      }
    },

    addtextdomain: {
      options: {
        textdomain: '<%= pkg._project.textdomain %>',
        updateDomains: ['twentyseventeen', 'inspiro-lite', 'wpzoom']
      },
      target: {
        files: {
          src: [
            '*.php',
            '**/*.php',
            '!node_modules/**',
            '!tests/**'
          ]
        }
      }
    },

    copy: {
      main: {
        options: {
          mode: true
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
        dest: '<%= pkg.name %>/'
      }
    },

    clean: {
      main: ['<%= pkg.name %>'],
      zip: ['*.zip'],
      minifiedJS: ['assets/js/minified/*'],
      minifiedCSS: ['assets/css/minified/*'],
    },

    compress: {
      main: {
        options: {
          archive: '<%= pkg.name %>-<%= pkg.version %>.zip',
          mode: 'zip'
        },
        files: [
          {
            src: [
              './<%= pkg.name %>/**'
            ]
          }
        ]
      }
    },

    bumpup: {
      options: {
        updateProps: {
          pkg: 'package.json'
        }
      },
      file: 'package.json'
    },

    replace: {
      theme_main: {
        src: ['style.css'],
        overwrite: true,
        replacements: [
          {
            from: /Version: \bv?(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)(?:-[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?(?:\+[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?\b/g,
            to: 'Version: <%= pkg.version %>'
          }
        ]
      },

      theme_const: {
        src: ['functions.php'],
        overwrite: true,
        replacements: [
          {
            from: /INSPIRO_THEME_VERSION', '.*?'/g,
            to: 'INSPIRO_THEME_VERSION\', \'<%= pkg.version %>\''
          }
        ]
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
            to: '<%= pkg.version %>'
          }
        ]
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
          '!style.css'
        ],
        overwrite: true,
        replacements: [
          {
            from: 'twentyseventeen',
            to: '<%= pkg._project.slug %>'
          },
          {
            from: '@package WordPress',
            to: '@package <%= pkg._project.package %>'
          },
          {
            from: '@subpackage Twenty_Seventeen',
            to: '@subpackage <%= pkg._project.subpackage %>'
          },
          {
            from: /@since Twenty Seventeen \bv?(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)(?:-[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?(?:\+[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?\b/g,
            to: '@since <%= pkg._project.name %> x.x.x'
          },
          {
            from: /@version \bv?(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)(?:-[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?(?:\+[\da-z-A-Z-]+(?:\.[\da-z-A-Z-]+)*)?\b/g,
            to: '@version x.x.x'
          }
        ]
      }
    },

    concat: {
      options: {
        separator: '\n',
        banner: '/*! <%= pkg.author %>\n' +
          ' * <%= pkg.name %> - v<%= pkg.version %>\n' +
          ' * Author website: https://wpzoom.com/\n' +
          ' * Updated: <%= grunt.template.today("yyyy-mm-dd") %>\n' +
          ' * This file is automatically created! Do not edit this file directly!' +
          ' */\n'
      },
      buildJSPlugins: {
        src: [
          'assets/js/unminified/*.js',
          '!assets/js/unminified/customize-controls.js',
          '!assets/js/unminified/customize-preview.js',
          '!assets/js/unminified/navigation.js',
          '!assets/js/unminified/scripts.js',
          '!assets/js/unminified/global.js',
          '!assets/js/unminified/plugins.js',
        ],
        dest: 'assets/js/unminified/plugins.js',
      },
      buildJS: {
        src: [
          'assets/js/unminified/global.js',
          'assets/js/unminified/navigation.js',
        ],
        dest: 'assets/js/unminified/scripts.js',
      }
    },
  });

  grunt.loadNpmTasks('grunt-rtlcss');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('@lodder/grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-wp-readme-to-markdown');
  grunt.loadNpmTasks('grunt-wp-i18n');
  grunt.loadNpmTasks('grunt-bumpup');
  grunt.loadNpmTasks('grunt-text-replace');

  // Register Tasks.

  // Bump Version - `grunt version-bump --ver=<version-number>`
  grunt.registerTask('version-bump', function(ver) {

    var newVersion = grunt.option('ver');

    if (newVersion) {
      newVersion = newVersion ? newVersion : 'patch';

      grunt.task.run('bumpup:' + newVersion);
      grunt.task.run('replace:theme_main', 'replace:theme_const', 'replace:theme_function_comment');
    }
  });

  // SASS compile
  grunt.registerTask('scss', ['sass']);

  // Style
  grunt.registerTask('style', ['scss', 'postcss:style']);

  // Lint the "beforeminify" files first, then minify
  grunt.registerTask('jshint-before-minify', ['jshint:beforeminify', 'uglify:js']);

  // min all
  grunt.registerTask('minify', ['jshint-before-minify', 'style', 'cssmin:css']);

  // Default task.
  grunt.registerTask('default', ['jshint:uses_defaults', 'minify']);

  // Grunt release - Create installable package of the local files
  grunt.registerTask('release', ['clean:zip', 'copy:main', 'compress:main', 'clean:main']);

  // Generate Read me file
  grunt.registerTask('readme', ['wp_readme_to_markdown']);

  // i18n
  grunt.registerTask('i18n', ['addtextdomain', 'makepot']);

  // Find and replace 'twentyseventeen' to the name of our theme in all the template files
  grunt.registerTask('theme-based-replace', ['replace:theme_based_replace']);

  grunt.util.linefeed = '\n';
};
