function change_footer()
{
	$("#front_pg_id").click(function(){
		document.querySelector("footer").style = "top: 132.7%";
	});

	$("#about_us_pg_id").click(function(){
		document.querySelector("footer").style = "top: 1000%";
	});

	$("#items_pg_id").click(function(){
		document.querySelector("footer").style = "top: 100%";
	});

	$("#delivery_pg_id").click(function(){
		document.querySelector("footer").style = "top: 339.7%";
	});

	$("#contact_pg_id").click(function(){
		document.querySelector("footer").style = "top: 339.7%";
	});
}


function set_contact_delivery_footer()
{
	$( document ).ready(function() {
		document.querySelector("footer").style = "top: 339.7%";
	});
}