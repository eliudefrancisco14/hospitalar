$(document).ready(function() {	

	//Colors
	$("#colors > a").click(function(e) {
		e.preventDefault();
		var btn = $(this);
		
		api.flipTimer.style(
			btn.data("bg-color"),
			btn.data("divider-color"),
			btn.data("digit-color")			
		);
	});

});