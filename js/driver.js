$( document ).ready(function() {

  set_front_page();
  loop_picture();
  
  switch_page("front");
  switch_page("about_us");
  switch_page("items");
  switch_page("delivery");
  switch_page("contact");

  change_footer();

  show_selection_page("items_front");
  show_selection_page("snack");
  show_selection_page("frozen_food");
  show_selection_page("seafood");
  show_selection_page("fresh_vegetables");
  show_selection_page("condiments");
  show_selection_page("bakery");
  show_selection_page("supplies");

  go_back("items_front");
  go_back("snack");
  go_back("frozen_food");
  go_back("seafood");
  go_back("fresh_vegetables");
  go_back("condiments");
  go_back("bakery");
  go_back("supplies");


});
