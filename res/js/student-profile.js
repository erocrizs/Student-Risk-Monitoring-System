$(document).ready(function() {
	$(".dim-screen").hide();
	$("#delete-link").click(function() {
		$(".dim-screen").fadeIn();
	});
	$("#cancel-delete").click(function() {
		$(".dim-screen").fadeOut();
	});
});