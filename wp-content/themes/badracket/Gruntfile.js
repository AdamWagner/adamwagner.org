
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    compass: {
       dist: {
         options: {
           config: 'config.rb'
         }
       }
    },

    jshint: {
        options: {
            /* relax */
            eqeqeq: false,
            indent: false,
            eqnull: true,
            // globalstrict: true,
            strict: false,
            smarttabs: true,
            /* enforce */
            curly: true,
            eqnull: true,
            browser: true,
            globals: { jQuery: true },
        },
        all: [
          'js/src/base/*.js',
          'js/src/post-load/*.js',
          ],
    },

    concat: {
       mobile : {
         src: [
          'js/src/lib/jquery.tap.js',
          'js/src/mobile/mobile.js',
         ],
         dest: 'js/build/mobile.js'
       },
       postLoad : {
         src: [
            'js/src/post-load/post-load.js',
         ],
         dest: 'js/build/post-load.js'
       },
       base: {
          src: [
           'js/src/lib/jquery.js',
           // 'js/src/lib/responsive-carousel.js',
           'js/src/lib/carousel.js',
           'js/src/lib/waypoints.js',
           'js/src/lib/jquery.color.js',
           'js/src/lib/jquery.djax.js',
           'js/src/lib/enquire.js',
           'js/src/mixpanel.js',
           'js/src/base/utils.js',
           'js/src/base/lazyload.js',
           'js/src/base/br_scripts.js',
           'js/src/base/base.js',
           'js/src/base/color.js',
           'js/src/base/router.js',
           'js/src/base/init.js',
          ],
          dest: 'js/build/base.js'
       },
    },

    uglify: {
      first: {
        files: {
          'js/build/post-load.min.js' : ['js/build/post-load.js'],
          'js/build/mobile.min.js' : ['js/build/mobile.js']
        }
      },
      second: {
        files: {
          'js/build/base.min.js' : ['js/build/base.js'],
        }
      }
    },

    hashres: {
      options: {
        fileNameFormat: '${hash}.${name}.${ext}',
        renameFiles: true
      },
      // hashres is a multitask. Here 'prod' is the name of the subtask. You can have as many as you want.
      first: {
        // Files to hash
        src: [
          'js/build/post-load.min.js',
          'js/build/mobile.min.js',
        ],
        // File that refers to above files and needs to be updated with the hashed name
        dest: ['js/src/base/br_scripts.js'],
      },
      second : {
        src: ['js/build/base.min.js'],
        dest: ['external/enqueue-static-assets.php'],
      },
    },

    clean: {
      initial: ['js/build/*.js'],
      post: [
      'js/build/post-load.js',
      'js/build/mobile.js',
      'js/build/base.js'
      ]
    },

    watch: {
       scripts: {
         files: ['sass/**/*.scss','js/src/*/*.js', '*.html', '*.php', 'assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}'],
         tasks: ['default'],
         options: {
           // nospawn: true, // this task was causing grunt watch to fail after first task was run
           livereload : true,
         },

       },
    },

  });


  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-hashres');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-devtools');

  // Default task(s).
  grunt.registerTask('default', [
    'clean:initial',
    'compass',
    'concat:mobile',
    'concat:postLoad',
    'jshint',
    'uglify:first',
    'hashres:first',
    'concat:base',
    'uglify:second',
    'hashres:second',
    'clean:post',
    ]);

};










