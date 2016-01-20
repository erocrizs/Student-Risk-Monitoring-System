$(document).ready(function() {
	$(".filters").hide();

	var category_clicked = [false, false, false];
	var category_name = ["Personal Information", "Risk Factors", "Protective Factors"];
	var category_children = [".p-i-filter", ".r-f-filter", ".p-f-filter"];
	$(".filter-bar h5").click(function() {
		var text = $(this).text();
		for(var i=0; i<3; i++)
		{
			if(text===category_name[i])
			{
				if(category_clicked[i])
					$(category_children[i]).hide();
				else
					$(category_children[i]).show();

				category_clicked[i] = !category_clicked[i];
			}
		}
	});
});