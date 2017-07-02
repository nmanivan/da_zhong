<!DOCTYPE html>
<html lang="en">
<head>
	<title>Da-Zhong</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS Sheets -->
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/front_page_no_quote.css">
	<link rel="stylesheet" href="css/about_us_page.css">
	<link rel="stylesheet" href="css/items_page.css">
	<link rel="stylesheet" href="css/snacks.css">
	<link rel="stylesheet" href="css/delivery_page.css">
	<link rel="stylesheet" href="css/contact_page.css">

	<!-- Jquery -->
	<script src="js/jquery/jquery-3.2.1.min.js"></script>

	<!-- Scripts -->
	<script src="js/set_front_page.js"> </script>
	<script src="js/loop_picture.js"> </script>
	<script src="js/switch_pages.js"> </script>
	<script src="js/set_footer.js"> </script>
	<script src="js/items_page.js"> </script>
	<script src="js/click_submit_refresh.js"> </script>
	<script src="js/driver.js"> </script>

</head>

<body>

	<!-- Header -->


	<header>
		<h1>
			Da-Zhong (大众)
		</h1>

		<h2>
			Oriental Food Market
		</h2>
	</header>

	<!-- Navigation bar -->
		<div class="nav_bar">
				
			<div class="nav_element">
				<div id="front_pg_id">
				<p> Home </p>
				</div>
			</div>

			<div class="nav_element">
				<div id = "about_us_pg_id">
				<p> About Da-Zhong </p>
				</div>
			</div>

			<div class="nav_element">
				<div id = "items_pg_id">
				<p> Items </p>
				</div>
			</div>

			<div class="nav_element">
				<div id = "delivery_pg_id">
				<p> Delivery Page </p>
				</div>
			</div>

			<div class="nav_element">
				<div id = "contact_pg_id">
				<p> Contact Page </p>
				</div>
			</div>
		</div>

	<!-- Header pictures -->

		<div class="header_pictures">
			
			<div id="lobster">
				<img src="images/lobster.svg" />
			</div>

			<div id="snacks">
				<img src="images/snacks.png" />
			</div>

			<div id="cabbage">
				<img src="images/cabbage.png" />
			</div>

			<div id="noodle_soup">
				<img src="images/noodle_soup.png" />
			</div>

		</div>
















	<!-- Home -->

	<div id="front_page_body">

		<div class="transition_pictures">
  			<div id="first">
  				<img src="slide_show/1.jpg" id="loop_picture_img" />
  			</div>

		</div>



		<div class="pop_items">
			<p> Popular Items </p>
		</div>

		<div class="popular_items">
			<ul>

			<div class="bean_sprouts">
			  <li>1. Bean Sprouts</li>
				  <div class="drop_down_content">
				  <p> Bean Sprouts </p>
			  </div>
			</div>

			<div class="sunflower_seeds">
			  <li>2. Sunflower Seeds</li>
				  <div class="drop_down_content">
				  <p> Sunflower Seeds </p>
			  </div>
			</div>

			<div class="duck">
			  <li>3. Peking Duck</li>
				  <div class="drop_down_content">
				  <p> <img src="images/duck.jpg" /> Delicious Peking Duck </p>
			  </div>
			</div>

			<div class="pork_buns">
			  <li>4. Pork Buns</li>
				  <div class="drop_down_content">
				  <p> Pork Buns </p>
			  </div>
			</div>

			<div class="egg_tarts">
			  <li>5. Egg Tarts</li>
				  <div class="drop_down_content">
				  <p> Egg Tarts </p>
			  </div>
			</div>

			<div class="bok_choy">
			  <li>6. Bok-Choy</li>
				  <div class="drop_down_content">
				  <p> Bok-Choy </p>
			  </div>
			</div>

			<div class="spinach">
			  <li>7. Spinach</li>
				  <div class="drop_down_content">
				  <p> Spinach </p>
			  </div>
			</div>

			</ul>
		</div>


	</div>











	<!-- About Da-Zhong -->

	<div id="about_us_page_body">

			<div id="aboutHeader">
				<h1>About Da Zhong</h1>
			</div>

			<div>
				<img src="images/da_zhong_store.jpg" alt=""  class="aboutStore">
			</div>

			<p id="storeInfo">Da Zhong Food Oriental is a grocery store with a variety of Asian goods from all cultures. Although a majority of our
				goods are Chinese, we also have plenty of Japanese, Korean, Vietnamese, and other products. Da Zhong was opened in late 2003 and has
				been opened for the last 14 years. In addition to food products, we also provide resturaunt supplies to local resturaunts in the Metro
				Detroit area. If you have any questions or concerns, please fill out the information on the contact page or call us at 248-426-9798. 
			</p>

			<h2 id="teamHeader">Meet the Owners</h2>

			

			<div>
				<img src="https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/dog-medium-landing-hero.ashx" alt="" class="img-circle" id="wendyPic">

			</div>

			<h3 id="wendyName">Wendy Shi</h3>

			<p id="wendyInfo">Wendy's main duty are restocking the store's supplies. If you are looking to sell your products at the store, please contact
				Wendy.
			</p>

			<div>
				<img src="https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/dog-medium-landing-hero.ashx" alt="" class="img-circle" id="yuiPic">
			</div>

			<h3 id="yuiName">Yui Yu</h3>
			<p id="yuiInfo">Yui delivers to most of the resturaunt's in Metro Detroit. If you are looking to see if an item is in stock or wish to know when
				your delivery is coming, please contact Yui.
			</p>

			<div>
				<img src="https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/dog-medium-landing-hero.ashx" alt="" class="img-circle" id="amandaPic">

			</div>

			<h3 id="amandaName">Amanda Wong</h3>
			<p id="amandaInfo">Amanda's main role is to take resturaunt orders and to resolve any issues with orders. If you have an issue or wish to order from Da Zhong, please contact Amanda.
			</p>
			
			<div>
				<img src="https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/dog-medium-landing-hero.ashx" alt="" class="img-circle" id="yingPic">
			</div>

			<h3 id="yingName">Ying Yu</h3>
			<p id="yingInfo">Ying also helps with the delivery of resturaunt supplies. He also is proficient in repairing resturaunt appliances. If you need help with
				a broken appliance, please contact Ying.
			</p>


	</div>













	<!-- Items -->
	<div id="items_page_body">

		<div id="items_front_body">
			<!-- Front page for items -->
			<h1> Items </h1>
			<div class="container_box">
				<div class="text-box">
					<h4>Snacks</h4>
				</div>
				<div id="snack"> <img class="img-responsive img-circle" src="http://inquiringchef.com/wp-content/uploads/2011/05/beijing-snacks1.jpg"/></div>
			</div>
			<div class="container_box">
				<div class="text-box">
					<h4>Frozen Food</h4>
				</div>
				<div id="frozen_food"><img class="img-responsive img-circle" src="https://www.webstaurantstore.com/images/products/extra_large/203838/849421.jpg"/></div>
			</div>
			<div class="container_box">
				<div class="text-box">
					<h4>Seafood</h4>
				</div>
				<div id="seafood"><img class="img-responsive img-circle" src="http://a57.foxnews.com/images.foxnews.com/content/fox-news/health/2017/01/26/if-eat-seafood-are-eating-thousands-pieces-plastic/_jcr_content/par/featured-media/media-0.img.jpg/876/493/1485439790246.jpg?ve=1&tl=1"/></div>
			</div>
			<div class="container_box">
				<div class="text-box">
					<h4>Fresh Vegetables</h4>
				</div>
				<div id="fresh_vegetables"><img class="img-responsive img-circle" src="http://images.wisegeek.com/mung-bean-sprouts.jpg"/></div>
			</div>
			<div class="container_box">
				<div class="text-box">
					<h4>Condiments</h4>
				</div>
				<div id="condiments"><img class="img-responsive img-circle" src="https://gatheraroundthetable.files.wordpress.com/2011/02/condiments.jpg"/></div>
			</div>
			<div class="container_box">
				<div class="text-box">
					<h4>Bakery</h4>
				</div>
				<div id="bakery"><img class="img-responsive img-circle" src="http://archive.jsonline.com/Services/image.ashx?domain=www.jsonline.com&file=119078784_luckybakery.jpg&resize="/></div>
			</div>
		</div>



		<div id="bakery_body">

			<div id="snackHeader">
				<h1><em><b>Bakery</b></em></h1>
			</div>

			<!-- Back button -->
			<div id="back_button">
				<img src="images/reply.png">
			</div>
			
			<div id="itemTable">
				<table>
					<tr>
					<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Pocky Sticks</b>
					<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hi-Chew Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Soda Pop</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sunflower Seeds</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>CiCi Drinks</b><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
						
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Shrimp Flavored Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Dried Seaweed Snack</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hello Panda Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Yan Yan Sticks</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>SkyFlakes Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Aloe Vera Drink</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>White Rabbit Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Choco Pie</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Flavored Gummy Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sriracha/Wasabi Peas</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Mochi Ice Cream</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
				</table>
				
			</div>

		</div>



		<div id="condiments_body">

			<div id="snackHeader">
				<h1><em><b>Condiments</b></em></h1>
			</div>

			<!-- Back button -->
			<div id="back_button">
				<img src="images/reply.png">
			</div>
			
			<div id="itemTable">
				<table>
					<tr>
					<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Pocky Sticks</b>
					<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hi-Chew Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Soda Pop</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sunflower Seeds</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>CiCi Drinks</b><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
						
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Shrimp Flavored Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Dried Seaweed Snack</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hello Panda Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Yan Yan Sticks</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>SkyFlakes Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Aloe Vera Drink</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>White Rabbit Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Choco Pie</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Flavored Gummy Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sriracha/Wasabi Peas</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Mochi Ice Cream</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
				</table>
				
			</div>
		</div>


		<div id="frozen_food_body">

			<div id="snackHeader">
				<h1><em><b>Frozen Foods</b></em></h1>
			</div>

			<!-- Back button -->
			<div id="back_button">
				<img src="images/reply.png">
			</div>
			
			<div id="itemTable">
				<table>
					<tr>
					<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Pocky Sticks</b>
					<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hi-Chew Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Soda Pop</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sunflower Seeds</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>CiCi Drinks</b><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
						
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Shrimp Flavored Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Dried Seaweed Snack</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hello Panda Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Yan Yan Sticks</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>SkyFlakes Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Aloe Vera Drink</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>White Rabbit Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Choco Pie</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Flavored Gummy Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sriracha/Wasabi Peas</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Mochi Ice Cream</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
				</table>
				
			</div>
			
		</div>


		<div id="seafood_body">

			<div id="snackHeader">
				<h1><em><b>Seafood</b></em></h1>
			</div>

			<!-- Back button -->
			<div id="back_button">
				<img src="images/reply.png">
			</div>
			
			<div id="itemTable">
				<table>
					<tr>
					<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Pocky Sticks</b>
					<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hi-Chew Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Soda Pop</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sunflower Seeds</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>CiCi Drinks</b><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
						
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Shrimp Flavored Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Dried Seaweed Snack</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hello Panda Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Yan Yan Sticks</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>SkyFlakes Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Aloe Vera Drink</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>White Rabbit Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Choco Pie</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Flavored Gummy Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sriracha/Wasabi Peas</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Mochi Ice Cream</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
				</table>
				
			</div>
			
		</div>


		<div id="snack_body">

			<div id="snackHeader">
				<h1><em><b>Snacks</b></em></h1>
			</div>

			<!-- Back button -->
			<div id="back_button">
				<img src="images/reply.png">
			</div>
			
			<div id="itemTable">
				<table>
					<tr>
					<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Pocky Sticks</b>
					<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hi-Chew Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Soda Pop</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sunflower Seeds</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>CiCi Drinks</b><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
						
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Shrimp Flavored Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Dried Seaweed Snack</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hello Panda Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Yan Yan Sticks</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>SkyFlakes Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Aloe Vera Drink</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>White Rabbit Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Choco Pie</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Flavored Gummy Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sriracha/Wasabi Peas</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Mochi Ice Cream</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
				</table>
				
			</div>

		</div>


		<div id="supplies_body">

			<div id="snackHeader">
				<h1><em><b>Supplies</b></em></h1>
			</div>

			<!-- Back button -->
			<div id="back_button">
				<img src="images/reply.png" id = back_button_img>
			</div>
			
			<div id="itemTable">
				<table>
					<tr>
					<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Pocky Sticks</b>
					<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hi-Chew Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Soda Pop</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sunflower Seeds</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>CiCi Drinks</b><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
						
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Shrimp Flavored Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Dried Seaweed Snack</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hello Panda Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Yan Yan Sticks</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>SkyFlakes Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Aloe Vera Drink</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>White Rabbit Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Choco Pie</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Flavored Gummy Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sriracha/Wasabi Peas</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Mochi Ice Cream</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
				</table>
				
			</div>
		</div>





		<div id="fresh_vegetables_body">

			<div id="snackHeader">
				<h1><em><b>Fresh Vegetables</b></em></h1>
			</div>

			<!-- Back button -->
			<div id="back_button">
				<img src="images/reply.png">
			</div>
			
			<div id="itemTable">
				<table>
					<tr>
					<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Pocky Sticks</b>
					<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hi-Chew Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Soda Pop</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sunflower Seeds</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>CiCi Drinks</b><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
						
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Shrimp Flavored Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Dried Seaweed Snack</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Hello Panda Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>

					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Yan Yan Sticks</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>SkyFlakes Crackers</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Aloe Vera Drink</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>White Rabbit Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Choco Pie</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Flavored Gummy Candy</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Sriracha/Wasabi Peas</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
					<tr>
						<td class="item"><img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="left"><b>Mochi Ice Cream</b>
						<img src="https://images-na.ssl-images-amazon.com/images/I/51cec%2BK-6-L.jpg" alt="" class="right"></td>
					</tr>
				</table>
				
			</div>

		</div>



	</div>







		<!-- Backend for form -->

		<?php include('php/email.php'); ?>

		<!-- Delivery Page -->

		<div id="delivery_page_body">


			<div class="delivery_form_header">
				<h2> Delivery Form </h2>
			</div>
			
			<div class="form">

			<form method = "post" action= "<?php echo $_SERVER["PHP_SELF"];?>">
				
				<div class= "name_delivery">
					Name: <input type="text" placeholder = "John" name="name">
					<span class="asterisk">* </span>
					<span class="error"> <?php echo $name_error_delivery;?></span>
					<br>
				</div>

				<div class="email_section_delivery">
					E-mail: <input type="text" placeholder = "ssuzie@gmail.com" name="email">
					<span class="asterisk">* </span>
					<span class="error"> <?php echo $email_error_delivery;?></span> 
					<br>	
				</div>

				<div class= "phone_num_delivery">
					Phone Number:
					<input type="text" placeholder = "###-###-####" name="phone_number">
					<span class="asterisk">* </span>
					<span class="error"> <?php echo $phone_number_error_delivery;?></span>
					<br>
				</div>

				<div class= "address_delivery">
					Address:
					<input type="text" placeholder = "12345 Greenwood Drive" name="address">
					<span class="asterisk">* </span>
					<span class="error"> <?php echo $address_error_delivery;?></span>
					<br>
				</div>

					<div class= "description_header_delivery">
						<p> Place Your Order: </p> 
					</div>

					<div class= "description_delivery">	
					 <textarea name="description" placeholder = "Beansprouts: 3 														Peking Duck: 2" rows = "0" columns = "0"></textarea>
					 <span class="asterisk">* </span>
					<span class="error"> <?php echo $description_error_delivery;?></span>
					</div>

					<div class="submit_button_delivery">
						<div id="delivery_submit">
						<input type="submit" name ="delivery_submit">
						</div>
					</div>

					<!-- This refreshes the page to display the delivery page instead of the home page -->
					<?php 
					if($submit_confirmed === "delivery submit confirmed")
					{ 
						?> 
					<script> delivery_submit_refresh(); </script>
					<script> set_contact_delivery_footer(); </script>

					<?php 
						} 
					?>

					<div class="success_delivery">
						<?php echo $success;?>
					</div> 

			</form>

			</div>


		</div>








		<!-- Contact Page -->

		<div id="contact_page_body">		
			<div class="email_us_header">
				<h2> Email Us </h2>
			</div>
			
			<div class="form">

			<form method = "post" action= "<?php echo $_SERVER["PHP_SELF"];?>">
				
				<div class= "name_contact">
					Name: <input type="text" placeholder = "John" name="name">
					<span class="asterisk">* </span>
					<span class="error"> <?php echo $name_error_contact;?></span>
					<br>
				</div>

				<div class="email_section_contact">
					E-mail: <input type="text" placeholder = "ssuzie@gmail.com" name="email">
					<span class="asterisk">* </span>
					<span class="error"> <?php echo $email_error_contact;?></span> 
					<br>	
				</div>

				<div class="subject_contact">
					Subject:
					<input type="text" placeholder = "Subject" name="subject">
					<span class="asterisk">* </span>
					<span class="error"> <?php echo $subject_error_contact;?></span>
					<br>
				</div>
					<div class= "description_header_contact">
						<p> Description: </p> 
					</div>

					<div class= "description_contact">	
					 <textarea name="description" placeholder = "How may we help you?" rows = "0" columns = "0"></textarea>
					 <span class="asterisk">* </span>
					<span class="error"> <?php echo $description_error_contact;?></span>
					</div>

					<div class="submit_button_contact">
						<div id="contact_submit">
						<input type="submit" name="contact_submit">
						</div>
					</div>

					<!-- This refreshes the page to display the contact page instead of the home page -->

					<?php 
					if($submit_confirmed === "contact submit confirmed")
					{ 
						?> 
					<script> contact_submit_refresh(); </script>
					<script> set_contact_delivery_footer(); </script>

					<?php 
						} 
					?>

					<div class="success_contact">
						<?php echo $success;?>
					</div> 

			</form>
			</div>



			<div class="contact_us_header">
				<h2> Contact Us </h2>
			</div>

			<div class="contact_body">
				<table>
				<tr> 
				<td> Yui Wai Yu (Primary Contact) </td>
				<th> 248-231-9889 </th>
				</tr>

				<tr> 
				<td> Wendy Shi (Secondary Contact) </td>
				<th> 248-880-6619 </th>
				</tr>

				<tr> 
				<td> Amanda Wong </td>
				<th> 248-231-9809 </th>
				</tr>

				<tr> 
				<td> Store </td>
				<th> 248-426-9798 </th>
				</tr>
				</table>
			</div>

		</div>
	


		<!-- Footer -->

		
			<footer>

				<div class="phone_number">
					<h4>
						Phone Number
					</h4>

					<p>
						248-231-9889
					</p>

				</div>

				<div class="address">
					<h4>
						Address 
					</h4>

					<p>
						28860 W Seven Mile Rd, Livonia, MI 48152
					</p>
				</div>

				<div class="email">
					<h4>
						Email 
					</h4>

					<p>
						amandawyu@yahoo.com
					</p>
				</div>

			</footer>


</body>
	
</html>










