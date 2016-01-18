$(document).ready( function(){
	
	$(".content").hide();
	$("#s-profile-frame").show();

	$(".nav-tabs li").click( function()
	{
		$(".nav-tabs li").attr("class", "");
		$(this).attr("class", "active");
		$(".content").hide();

		var clickedIndex = $(this).index();
		switch(clickedIndex)
		{
			case 0:
				$("#s-profile-frame").show();
				break;
			case 1:
				$("#s-report-frame").show();
				break;
			case 2:
				$("#a-profile-frame").show();
				break;
			case 3:
				$("#a-report-frame").show();
				break;
		}
	});

});