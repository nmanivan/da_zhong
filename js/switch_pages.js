function switch_page(page) {

  var pages = ["front", "about_us", "items", "delivery", "contact"];
    $("#" + page + "_pg_id").click(function(){

      for (var i = 0; i < pages.length; ++i) {
        if (pages[i] != page) {
          $("#" + pages[i] + "_page_body").css("display","none");
        }

      }

      if(page === "items")
      {
		$("#items_front_body").css("display","inline-block");	
      	$("#snack_body").css("display","none");
      	$("#frozen_food_body").css("display","none");
      	$("#seafood_body").css("display","none");
      	$("#fresh_vegetables_body").css("display","none");
      	$("#condiments_body").css("display","none");
      	$("#bakery_body").css("display","none");
      	$("#supplies_body").css("display","none");
      	$("#frozen_food_body").css("display","none");
      }
      
      $("#" + page + "_page_body").fadeIn();


    });


}
