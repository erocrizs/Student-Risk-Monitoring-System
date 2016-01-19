$(document).ready( function(){
	
	$(".content").hide();
	$("#s-profile-frame").show();

	var index = ["#s-profile-frame", "#s-report-frame", "#a-profile-frame", "#a-report-frame"];
	$(".nav-tabs li").click( function()
	{
		$(".nav-tabs li").attr("class", "");
		$(this).attr("class", "active");
		$(".content").hide();

		var clickedIndex = $(this).index();
		$(index[clickedIndex]).show();
	});

});