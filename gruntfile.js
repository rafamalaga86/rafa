module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        uglify: {
            default: {
                files: {
                    'public/js/production/scripts.min.js': [
                        'public/js/fastclick.js',
                        'public/js/classie.js',
                        'public/js/modernizr.custom.js',
                        'public/js/stepsForm.js',
                        'public/js/morphingdevice.js',
                        'public/js/foundation.js',
                        'public/js/foundation.reveal.js',
                        'public/js/spin.min.js',
                        'public/js/rafascript.js'
                    ]
                }
            }
        },

        less: {
            default: {
                options: {
                    compress: false
                },
                files: {
                    "public/css/rafastyle.css": "public/css/rafastyle.less"
                }
            }
        },

        concat: {
            default: {
               src: [
                     'public/css/normalize.css',
                     'public/icons/style.css',
                     'public/css/form-component.css',
                     'public/css/morphing-component.css',
                     'public/css/rafastyle.css'
                    ],
                dest: 'public/css/production/combined.css'
            }
        },


        cssmin : {
            default:{
                src: 'public/css/production/combined.css',
                dest: 'public/css/production/style.min.css'
            }
        },






    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'less', 'concat', 'cssmin']);

};