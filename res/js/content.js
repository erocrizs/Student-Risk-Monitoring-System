$(document).ready(function() {
	$(".filters").hide();
	$(".hidden-filter").hide();

	var category_clicked = [false, false, false];
	var category_name = ["Personal Information", "Risk Factors", "Protective Factors"];
	var category_children = ["#p-i-filter", "#r-f-filter", "#p-f-filter"];
	$(".filter-bar h5").click(function() {
		var text = $(this).text().trim();
		for(var i=0; i<3; i++)
		{
			if(text===category_name[i])
			{
				if(category_clicked[i]) {
					$(category_children[i]).slideUp();
					$(this).children("span").attr("class", "glyphicon glyphicon-chevron-down");
				}
				else{
					$(category_children[i]).slideDown();
					$(this).children("span").attr("class", "glyphicon glyphicon-chevron-up");
				}

				category_clicked[i] = !category_clicked[i];
			}
		}
	});

	
	$(".filters li .detail").click(function() {
		var toggleable = $(this).parent().children(".hidden-filter");
		if(toggleable.is(":visible"))
			toggleable.slideUp();
		else
			toggleable.slideDown();
	});
	
});