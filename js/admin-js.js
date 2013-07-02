(function(){
	var $ = jQuery;
	$(document).ready(
		$('h3.gaia-known').on('click', (function(){
			$('div.gaia-known').slideToggle();
		})
		)
		);
})();