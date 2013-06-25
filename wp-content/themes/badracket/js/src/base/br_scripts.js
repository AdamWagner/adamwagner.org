br_scripts = function(){

	var wpPath = aw.utils.envCheck('/aw/wp-content/themes/badracket','/wp-content/themes/badracket','/wp-content/themes/badracket') ;

	var gzip = (BR_ENV === 'local') ? '' : '.gzip';

	var cdn = aw.utils.envCheck('', 'http://d1795rfny8s8fj.cloudfront.net', 'http://d245myou62vn42.cloudfront.net');

	return {
		postLoad : cdn + wpPath + '/js/build/d41d8cd9.post-load.min.js',
		mobile : cdn + wpPath + '/js/build/d41d8cd9.mobile.min.js',
	};
}();