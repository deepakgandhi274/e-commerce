<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<head>
	<title>Free Ecomm Template Website Template | Preview :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript">
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<link rel="stylesheet" href="css/etalage.css">
	<script src="js/jquery.etalage.min.js"></script>
	<script>
		jQuery(document).ready(function($) {

			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,
				source_image_width: 900,
				source_image_height: 1200,
				show_hint: true,
				click_callback: function(image_anchor, instance_id) {
					alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
				}
			});

		});
	</script>
	<script src="js/star-rating.js" type="text/javascript"></script>
</head>

<body>
	<div class="header">
		<div class="wrap">
			<div class="header_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="header_top_right">
					<div class="search_box">
						<span>Search</span>
						<form>
							<input type="text" value=""><input type="submit" value="">
						</form>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="navigation">
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="test">
						<a href="#">Appliances</a>
						<ul>
							<li>
								<a href="#">Cookware</a>
								<ul>
									<li><a href="#">Pots & Pans</a></li>
									<li><a href="#">Pressure Cookers</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Storage</a>
								<ul>
									<li><a href="#">Bottles & Sippers</a></li>
									<li><a href="#">Containers & Jars</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Cutlery & Tableware</a>
								<ul>
									<li><a href="#">Cutlery</a></li>
									<li><a href="#">Condiment Sets</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Bar Accessories</a>
								<ul>
									<li><a href="#">Bottle Openers</a></li>
									<li><a href="#">Flasks</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Computers</a>
						<ul>
							<li>
								<a href="#">Laptops</a>
								<ul>
									<li><a href="#">HP</a></li>
									<li><a href="#">Lenova</a></li>
									<li><a href="#">Dell</a></li>
									<li><a href="#">All Brands</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Computer Accessories</a>
								<ul>
									<li><a href="#">External Hard Disks</a></li>
									<li><a href="#">Pendrives</a></li>
									<li><a href="#">PC Components</a></li>
									<li><a href="#">Computer Peripherals</a></li>
									<li><a href="#">Datacards & Routers</a></li>
									<li><a href="#">Mouse</a></li>
									<li><a href="#">Laptop Skins & Decals</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Health & Beauty</a>
						<ul>
							<li><a href="#">Bath & Skin Care</a></li>
							<li><a href="#">Health & Safety</a></li>
							<li><a href="#">Maternity Care</a></li>
							<li><a href="#">Body Care Combos</a></li>

						</ul>
					</li>
					<li>
						<a href="#">Home & Garden</a>
						<ul>
							<li>
								<a href="#">Home Furnishing</a>
								<ul>
									<li><a href="#">Bed</a></li>
									<li><a href="#">Bath</a></li>
									<li><a href="#">Kitchen</a></li>
									<li><a href="#">Living</a></li>

								</ul>
							</li>
							<li>
								<a href="#">Home Decor</a>
								<ul>
									<li><a href="#">Flowers & Plants</a></li>
									<li><a href="#">Home Fragrances</a></li>
									<li><a href="#">Spiritual Decor</a></li>
									<li><a href="#">Wall Decor</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Gardening Tools</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Office Supplies</a>
						<ul>
							<li>
								<a href="#">Books</a>
								<ul>
									<li><a href="#">Academic & Professional</a></li>
									<li><a href="#">Entrance Exam</a></li>
									<li><a href="#">Literature & Fiction</a></li>
									<li><a href="#">Children & Teens</a></li>
									<li><a href="#">Indian Writing</a></li>
									<li><a href="#">New Releases</a></li>
									<li><a href="#">Bestsellers</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Stationery</a>
								<ul>
									<li><a href="#">Pens</a></li>
									<li><a href="#">Calculators</a></li>
									<li><a href="#">College Supplies</a></li>
									<li><a href="#">Art Supplies</a></li>
									<li><a href="#">Diaries & Notebooks</a></li>
									<li><a href="#">Gifting</a></li>
								</ul>
							</li>

						</ul>
					</li>
					<li>
						<a href="#">Sports Equipment</a>
						<ul>
							<li>
								<a href="#">Fitness</a>
								<ul>
									<li><a href="#">Yoga Mats</a></li>
									<li><a href="#">Gym Gloves</a></li>
									<li><a href="#">Ab Exercisers</a></li>
									<li><a href="#">Gym Balls</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Indoor Sports</a>
								<ul>
									<li><a href="#">Chess</a></li>
									<li><a href="#">Darts</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Team Sports</a>
								<ul>
									<li><a href="#">Basketball</a></li>
									<li><a href="#">Cricket</a></li>
									<li><a href="#">Football</a></li>
									<li><a href="#">VolleyBall</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Racquet Sports</a>
								<ul>
									<li><a href="#">Badminton</a></li>
									<li><a href="#">Squash</a></li>
									<li><a href="#">Table Tennis</a></li>
									<li><a href="#">Tennis</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
				<span class="left-ribbon"> </span>
				<span class="right-ribbon"> </span>
			</div>
		</div>
	</div>
	<!------------End Header ------------>
	<?php
	require_once("config/db.php");
	$id = $_GET['id'];
	//    echo $id;
	$data21 = mysqli_query($way, "SELECT COUNT(*) FROM `popular_products` WHERE `pop_id`='$id'");
	$row21 = mysqli_fetch_array($data21, MYSQLI_ASSOC);
	// echo "<pre>";
	// print_r($row21);
	$value = $row21['COUNT(*)'];
	if ($value == 0) {
		mysqli_query($way, "INSERT INTO `popular_products`(`pro_ref_id`, `max_value`) VALUES ('$id',1)");
	} else {
		$data22 = mysqli_query($way, "SELECT `max_value` FROM `popular_products` WHERE `pop_id`='$id'");
		$row22 = mysqli_fetch_array($data22, MYSQLI_ASSOC);
		$up_value = $row22['max_value'];
		$up_value += 1;
		mysqli_query($way, "UPDATE `popular_products` SET `max_value`=$up_value WHERE `pro_ref_id`='$id'");
	}
	$data = mysqli_query($way, "SELECT * FROM `product_detail` WHERE `pro_id`='$id'");
	$row = mysqli_fetch_array($data, MYSQLI_ASSOC);
	// echo "<pre>";
	// print_r($row);
	$pro_title = $row['pro_title'];
	$pro_brand = $row['pro_brand'];
	$pro_price = $row['pro_price'];
	$pro_dis = $row['pro_dis'];
	$pro_qty = $row['pro_qty'];
	$pro_color = $row['pro_color'];
	$pro_size = $row['pro_size'];
	$pro_desc = $row['pro_desc'];
	$dis_amount = $pro_price * $pro_dis / 100;
	$f_price = $pro_price - $dis_amount;

	?>
	<div class="main">
		<div class="wrap">
			<div class="preview-page">
				<div class="section group">
					<div class="cont-desc span_1_of_2">
						<ul class="back-links">
							<li><a href="#">Home</a> ::</li>
							<li><a href="#">Product Page</a> ::</li>
							<li>Product Name</li>
							<div class="clear"> </div>
						</ul>
						<div class="product-details">
							<div class="grid images_3_of_2">
								<ul id="etalage">
									<?php

									$data1 = mysqli_query($way, "SELECT * FROM `product_image` WHERE `pro_ref_id`='$id' ORDER BY `img_id` ASC limit 4");
									while ($row1 = mysqli_fetch_array($data1, MYSQLI_ASSOC)) {
										$pro_image_name = $row1['pro_image_name'];
									?>
										<li>
											<a href="optionallink.html">
												<img class="etalage_thumb_image" src="<?php echo $pro_image_name; ?>" />
												<img class="etalage_source_image" src="<?php echo $pro_image_name; ?>" title="" />
											</a>
										</li>
									<?php
									}
									?>

								</ul>
							</div>
							<div class="desc span_3_of_2">
								<h2><?= $pro_title; ?></h2>
								<p><?= $pro_desc; ?></p>
								<div class="price">
									<p>Price: <span>₹<del><?= $pro_price; ?></del></span> <span>Final Mount :<?= $f_price; ?></span></p>
								</div>
								<div class="available">
									<ul>
										<li><span>Model:</span> &nbsp; Model 1</li>
										<li><span>Shipping Weight:</span>&nbsp; 75.58 kg</li>
										<li><span>Units in Stock:</span>&nbsp; 566</li>
									</ul>
								</div>
								<div class="share-desc">
									<div class="share">
										<p>Number of units :</p><input type="number" class="text_box" type="text" value="1" min="1" />
									</div>
									<div class="button"><span><a href="#">Add to Cart</a></span></div>
									<div class="clear"></div>
								</div>
								<div class="wish-list">
									<ul>
										<li class="wish"><a href="#">Add to Wishlist</a></li>
										<li class="compare"><a href="#">Add to Compare</a></li>
									</ul>
								</div>
								<div class="colors-share">
									<div class="color-types">
										<h4>Available Colors</h4>
										<form class="checkbox-buttons">
											<ul>
												<li><input id="r1" name="r1" type="radio"><label for="r1" class="grey"> </label></li>
												<li><input id="r2" name="r1" type="radio"><label for="r2" class="blue"> </label></li>
												<li><input id="r3" name="r1" type="radio"><label class="white" for="r3"> </label></li>
												<li><input id="r4" name="r1" type="radio"><label class="black" for="r4"> </label></li>
											</ul>
										</form>
									</div>
									<div class="social-share">
										<h4>Share Product</h4>
										<ul>
											<li><a class="share-face" href="#"> </a></li>
											<li><a class="share-twitter" href="#"> </a></li>
											<li><a class="share-google" href="#"> </a></li>
											<li><a class="share-rss" href="#"> </a></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="product_desc">
							<div id="horizontalTab">
								<ul class="resp-tabs-list">
									<li>Specifications</li>
									<li>product Tags</li>
									<li>Product Reviews</li>
									<div class="clear"></div>
								</ul>
								<div class="resp-tabs-container">
									<div class="product-specifications">
										<ul>
											<li><span class="specification-heading">Body type</span> <span>Metal</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Spin Speed (rpm)</span> <span>0/400/800/1000/1200</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Machine weight (kg)</span> <span>75</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Wash System</span> <span>Tumble wash</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Door diameter (mm)</span> <span>300</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Dimensions (w*d*h) without packing</span> <span>595x595x850</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Power Supply</span> <span>230V, 50Hz, 16Amps</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Motor (Watts)</span> <span>440 for Wash/490 for Spin</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Drum basket</span> <span>stainless steel</span>
												<div class="clear"></div>
											</li>
											<li><span class="specification-heading">Adjustable Feet</span> <span>4 </span>
												<div class="clear"></div>
											</li>
										</ul>
									</div>

									<div class="product-tags">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										<h4>Add Your Tags:</h4>
										<div class="input-box">
											<input type="text" value="">
										</div>
										<div class="button"><span><a href="#">Add Tags</a></span></div>
									</div>

									<div class="review">
										<h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
										<ul>
											<li>Price : <div class="rating-stars">
													<div class="rating" data-rating-max="5"> </div>
												</div>
											</li>
											<li>Value : <div class="rating-stars">
													<div class="rating" data-rating-max="5"> </div>
												</div>
											</li>
											<li>Quality : <div class="rating-stars">
													<div class="rating" data-rating-max="5"> </div>
												</div>
											</li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										<div class="your-review">
											<h4>How Do You Rate This Product?</h4>
											<p>Write Your Own Review?</p>
											<form>
												<div>
													<span><label>Nickname<span class="red">*</span></label></span>
													<span><input type="text" value=""></span>
												</div>
												<div><span><label>Summary of Your Review<span class="red">*</span></label></span>
													<span><input type="text" value=""></span>
												</div>
												<div>
													<span><label>Review<span class="red">*</span></label></span>
													<span><textarea> </textarea></span>
												</div>
												<div>
													<span><input type="submit" value="SUBMIT REVIEW"></span>
												</div>
											</form>
										</div>
										<script type="text/javascript">
											/* place inside document ready function */
											$(".rating").starRating({
												minus: true // step minus button
											});
										</script>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rightsidebar span_3_of_1 sidebar">
						<h3>Popular Products</h3>
						<ul class="popular-products">
							<?php

							$data55 = mysqli_query($way, "SELECT * FROM `popular_products` ORDER BY `max_value` DESC LIMIT 4");
							while ($row55 = mysqli_fetch_array($data55, MYSQLI_ASSOC)) {
								$pro_ref_id = $row55['pro_ref_id'];
								$data56 = mysqli_query($way, "SELECT * FROM `product_detail` WHERE `pro_id`='$pro_ref_id'");
								while ($row56 = mysqli_fetch_array($data56, MYSQLI_ASSOC)) {
									$pro_id = $row56['pro_id'];
									$pro_title = $row56['pro_title'];
									$pro_brand = $row56['pro_brand'];
									$pro_price = $row56['pro_price'];
									$pro_dis = $row56['pro_dis'];
									$pro_qty = $row56['pro_qty'];
									$pro_color = $row56['pro_color'];
									$pro_size = $row56['pro_size'];
									$pro_desc = $row56['pro_desc'];
									$dis_amount = $pro_price * $pro_dis / 100;
									$f_price = $pro_price - $dis_amount;
									$data5 = mysqli_query($way, " SELECT * FROM `product_image` WHERE `pro_ref_id`=$pro_id ORDER BY `img_id` asc LIMIT 1;");
									$row5 = mysqli_fetch_array($data5, MYSQLI_ASSOC);
									$pro_image_name = $row5['pro_image_name'];
							?>
									<li>
										<h4><a href="preview.html"><?= $pro_title; ?> </a></h4>
										<a href="preview.php?id=<?php echo $pro_id; ?>"><img src="<?php echo $pro_image_name; ?>" alt="" style="width:100%;height:200px" /></a>
										<div class="price-details">
											<div class="price-number">
												<p><span class="rupees line-through">₹<?= $pro_price; ?> </span> &nbsp; <span class="rupees">₹<?= $f_price; ?> </span></p>
											</div>
											<div class="add-cart">
												<h4><a href="preview.php?id=<?php echo $pro_id; ?>">More Info</a></h4>
											</div>
											<div class="clear"></div>
										</div>
									</li>
							<?php
								}
							}
							?>
						</ul>

						<div class="community-poll">
							<h3>Community POll</h3>
							<p>What is the main reason for you to purchase products online?</p>
							<div class="poll">
								<form>
									<ul>
										<li>
											<input type="radio" name="vote" class="radio" value="1">
											<span class="label"><label>More convenient shipping and delivery </label></span>
										</li>
										<li>
											<input type="radio" name="vote" class="radio" value="2">
											<span class="label"><label for="vote_2">Lower price</label></span>
										</li>
										<li>
											<input type="radio" name="vote" class="radio" value="3">
											<span class="label"><label for="vote_3">Bigger choice</label></span>
										</li>
										<li>
											<input type="radio" name="vote" class="radio" value="5">
											<span class="label"><label for="vote_5">Payments security </label></span>
										</li>
										<li>
											<input type="radio" name="vote" class="radio" value="6">
											<span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>
										</li>
										<li>
											<input type="radio" name="vote" class="radio" value="7">
											<span class="label"><label for="vote_7">Other.</label></span>
										</li>
									</ul>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content_top">
			<div class="wrap">
				<h3>Recently Viewed</h3>
			</div>
			<div class="line"> </div>
			<div class="wrap">
				<div class="ocarousel_slider">
					<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
						<div class="ocarousel_window">
							<!-- new mat  -->
							<?php

							$rec_data = mysqli_query($way, "SELECT * FROM `recently_view` ORDER by `recent_id` DESC LIMIT 12");
							while ($row_rec = mysqli_fetch_array($rec_data, MYSQLI_ASSOC)) {
								// echo "<pre>";
								// print_r($row_rec);
								// die();

								$pro_ref_id = $row_rec['pro_ref_id'];
								// echo $pro_ref_id;

								$data5 = mysqli_query($way, "SELECT * FROM `product_images` where pro_ref_id =$pro_ref_id order by img_id asc limit 1");
								$row5 = mysqli_fetch_array($data5, MYSQLI_ASSOC);
								$pro_image_name = $row5['pro_image_name'];
								echo $pro_image_name;

							?>
								<a href="#" title="img1"> <img src="<?php echo $pro_image_name; ?>" style="height: 120px" alt="" />
									<p><?= $pro_title; ?></p>
								</a>
							<?php

							}

							?>

							
						</div>
						<span>
							<a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
							<a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="wrap">
			<div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Template by <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
			</div>
			<div class="footer-nav">
				<ul>
					<li><a href="#">Terms of Use</a> : </li>
					<li><a href="#">Privacy Policy</a> : </li>
					<li><a href="contact.html">Contact Us</a> : </li>
					<li><a href="#">Sitemap</a></li>
				</ul>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop"> </a>
	<script type="text/javascript" src="js/navigation.js"></script>
</body>

</html>