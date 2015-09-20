module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			dist: {
				options: {
					sassDir: 'sass',
					cssDir: 'css',
      				noLineComments: true
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['compass']
			}
		},
	});
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
}