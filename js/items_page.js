function show_selection_page(page)
{
	var pages = ["items_front", "snack", "frozen_food", "seafood", "fresh_vegetables", "condiments", "bakery", "supplies"];
    $("#" + page).click(function(){

      for (var i = 0; i < pages.length; ++i) {
        if (pages[i] != page) {
          $("#" + pages[i] + "_body").css("display","none");
        }

      }

      $("#" + page + "_body").fadeIn();


    });
}

function go_back(page)
{
	$("#"+ page + "_back_button").click(function(){
		$("#items_front_body").css("display","inline-block");	
      	$("#" + page + "_body").css("display","none");
    });
}