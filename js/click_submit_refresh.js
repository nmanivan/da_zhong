function contact_submit_refresh()
{
	$( document ).ready(function() {
		$("#front_page_body").css("display", "none");
		$("#about_us_page_body").css("display", "none");
		$("#items_page_body").css("display", "none");
		$("#delivery_page_body").css("display", "none");
		$("#contact_page_body").css("display", "block");

	});
}

function delivery_submit_refresh()
{	
	$( document ).ready(function() {
		$("#contact_page_body").css("display", "none");
		$("#front_page_body").css("display", "none");
		$("#about_us_page_body").css("display", "none");
		$("#delivery_page_body").css("display", "block");
		$("#items_page_body").css("display", "none");

	});
}