function switch_page(page) {

  var pages = ["front", "about_us", "items", "delivery", "contact"];
    $("#" + page + "_pg_id").click(function(){

      for (var i = 0; i < pages.length; ++i) {
        if (pages[i] != page) {
          $("#" + pages[i] + "_page_body").css("display","none");
        }

      }

      $("#" + page + "_page_body").fadeIn();


    });


}


function change_footer()
{
	$("#front_pg_id").click(function(){
		document.querySelector("footer").style = "top: 132.7%";
	});

	$("#about_us_pg_id").click(function(){
		document.querySelector("footer").style = "top: 100%";
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