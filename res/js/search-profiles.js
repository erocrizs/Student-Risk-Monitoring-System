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

	$(".collapse-trigger").hover(
		function() {
			var parent = $(this).parent();
			parent.css("background-color", "#eee");
			var children = parent.find(".collapse-trigger, .collapsee");
			children.css("background-color", "#eee");
		}, function () {
			var parent = $(this).parent();
			parent.css("background-color", "#fff");
			var children = parent.find(".collapse-trigger, .collapsee");
			children.css("background-color", "#fff");
		}
	);

	$("#clear-button").click(function() {
		$("#filter").trigger("reset");
		$(".collapsee").hide();
	});
});