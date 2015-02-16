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
                files: {
                    "public/css/production/style.css": "public/css/rafastyle.less"
                }
            }
        },
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'less']);

};