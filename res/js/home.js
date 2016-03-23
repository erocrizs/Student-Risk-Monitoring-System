$(document).ready( function(){
	
	$(".content").hide();
	$("#alert-profile-frame").show();

	var index = ["#alert-profile-frame", "#s-profile-frame", "#s-report-frame", "#a-profile-frame", "#a-report-frame", "#manage-account-frame"];
	$(".nav-tabs li").click( function()
	{
		$(".nav-tabs li").attr("class", "");
		$(this).attr("class", "active");
		$(".content").hide();

		var clickedIndex = $(this).index();
		$(index[clickedIndex]).show();
	});

});