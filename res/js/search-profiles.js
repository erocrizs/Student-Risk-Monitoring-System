$(document).ready(function() {
	$(".collapsee").hide();

	$(".collapse-trigger").click(function() {
		var parent = $(this).parent();
		var collapsing = parent.children(".collapsee");
		if(collapsing.is(":visible"))
			collapsing.slideUp();
		else
			collapsing.slideDown();
	});
});