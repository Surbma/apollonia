if (typeof $ == "undefined") { $ = jQuery; }

$(function() {
	$(document).ready(function(){

		$('body :not(script,sup)').contents().filter(function() {
		    return this.nodeType === 3;
		}).replaceWith(function() {
		    return this.nodeValue.replace(/[®©]/g, '<sup>$&</sup>');
		});

	});
});
