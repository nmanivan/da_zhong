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

function go_back()
{
	$("#back_button").click(function(){
		$("#items_front_body").css("display","inline-block");	
      	$("#snack_body").css("display","none");
      	$("#frozen_food_body").css("display","none");
      	$("#seafood_body").css("display","none");
      	$("#fresh_vegetables_body").css("display","none");
      	$("#condiments_body").css("display","none");
      	$("#bakery_body").css("display","none");
      	$("#supplies_body").css("display","none");
      	$("#frozen_food_body").css("display","none");

    });
}