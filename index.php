<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<head>
	<title>Free Ecomm Template Website Template | Home :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
</head>

<body onload="get_all_product_details()">
	<?php
	require_once 'config/db.php'
	?>
	<div class="header">
		<div class="wrap">
			<div class="header_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo1.png" alt="" /></a>
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
					<?php
					$data = mysqli_query($way, "SELECT * FROM `main_menu`");
					while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {

						$main_cate = $row['main_cate'];
					?>
						<li class="test">
							<a href="#"><?= $main_cate; ?></a>
							<ul>

								<?php
								$sql = "SELECT * FROM `sub_menu` WHERE `menu_main_ref_id`='$main_cate'";
								$data1 = mysqli_query($way, $sql);
								// echo "<pre>";
								// print_r($data1);
								while ($row1 = mysqli_fetch_array($data1, MYSQLI_ASSOC)) {
									// echo "<pre>";
									// print_r($row1);
									// die();
									$sub_menu_name = $row1['sub_menu_name'];
								?>
									<li>
										<a href="#"><?= $sub_menu_name ?></a>

									</li>
								<?php
								}

								?>

							</ul>
						</li>
					<?php
					}

					?>




				</ul>
				<span class="left-ribbon"> </span>
				<span class="right-ribbon"> </span>
			</div>
			<div class="header_bottom">
				<div class="slider-text">
					<h2>Lorem Ipsum Placerat <br />Elementum Quistue Tunulla Maris</h2>
					<p>Vivamus vitae augue at quam frigilla tristique sit amet<br /> acin ante sikumpre tisdin.</p>
					<a href="#">Sitamet Tortorions</a>
				</div>
				<div class="slider-img">
					<img src="images/slider-img.png" alt="" />
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!------------End Header ------------>
	<div class="main">
		<div class="content">
			<div class="content_top">
				<div class="wrap">
					<h3>Latest Products</h3>
				</div>
				<div class="line"> </div>
				<div class="wrap">
					<div class="ocarousel_slider">
						<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
							<div class="ocarousel_window">

								<?php
								$data4 = mysqli_query($way, "SELECT * FROM `product_detail` ORDER BY `pro_id` DESC LIMIT 12");
								while ($row4 = mysqli_fetch_array($data4, MYSQLI_ASSOC)) {
									//    echo "<pre>";
									//    print_r($row4);
									$pro_title = $row4['pro_title'];
									$pro_id = $row4['pro_id'];
									$data5 = mysqli_query($way, "SELECT * FROM `product_image` WHERE `pro_ref_id`=$pro_id ORDER BY `img_id` ASC LIMIT 1;");
									$row5 = mysqli_fetch_array($data5, MYSQLI_ASSOC);
									$pro_image_name = $row5['pro_image_name'];

								?>
									<a href="preview.php?id=<?php echo $pro_id; ?>"  title="img1"> <img src="<?php echo $pro_image_name ?>" alt="" style="height: 100px;height:100px;" />
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
			<div class="content_bottom">
				<div class="wrap">
					<div class="content-bottom-left">
						<div class="categories">
							<ul>
								<h3>Browse All Categories</h3>

								<?php
								$data6 = mysqli_query($way, "SELECT `sub_menu_name` FROM `sub_menu` ");
								while ($row6 = mysqli_fetch_array($data6)) {
									// $pro_id=$row['pro_id'];
									//  $sub_cate=$row['sub_cate'];
									$sub_menu_name = $row6['sub_menu_name']
								?>
									<li><a href="javascript:void(0)" onclick="get_data_by_category('<?php echo $sub_menu_name; ?>')"><?php echo $sub_menu_name; ?></a></li>
								<?php
								}

								?>


							</ul>
						</div>
						<div class="buters-guide">
							<h3>Buyers Guide</h3>
							<p><span>We want you to be happy with your purchase.</span></p>
							<p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
						</div>
						<div class="add-banner">
							<img src="images/camera.png" alt="" />
							<div class="banner-desc">
								<h4>Electronics</h4>
								<a href="#">More Info</a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="add-banner add-banner2">
							<img src="images/computer.png" alt="" />
							<div class="banner-desc">
								<h4>Computers</h4>
								<a href="#">More Info</a>
							</div>
							<div class="clear"></div>
						</div>
					</div>

					<div class="content-bottom-right">
						<h3>Browse All Categories</h3>

						<div>
							<input type="text" style="width: 100%;height:35px" placeholder="search what do you want ?" onkeydown="search_product()" id="sea">
						</div>

						<div class="section group">
							<div id="result"></div>
						</div>





						<div class="product-articles">
							<h3>Browse All Categories</h3>
							<ul>
								<li>
									<div class="article">
										<p><span>Aenean vitae massa dolor</span></p>
										<p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
										<p><a href="#">+ Read Full article</a></p>
									</div>
								</li>
								<li>
									<div class="article">
										<p><span>Phasellus sollicitudin consectetur</span></p>
										<p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
										<p><a href="#">+ Read Full article</a></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
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

	<script type="text/javascript">
		function get_all_product_details() {
			//alert("Ok")
			rec_data = "Abc";
			var dataString = '?search=' + rec_data;

			$.ajax({
				type: "POST",
				url: "all_product_by_ajax.php",
				data: dataString,
				cache: false,
				success: function(html) {
					//alert(html);
					$("#result").html(html).show();
				}
			});
		}


		function get_data_by_category(cate) {
			var dataString = 'search=' + cate;

			$.ajax({
				type: "POST",
				url: "get_by_category.php",
				data: dataString,
				cache: false,
				success: function(html) {
					//alert(html);
					$("#result").html(html).show();
				}
			});
		}

		function search_product() {
			var sea = document.getElementById("sea").value;
			var dataString = 'search=' + sea;
			$.ajax({
				type: "POST",
				url: "search_product.php",
				data: dataString,
				cache: false,
				success: function(html) {
					//alert(html);
					$("#result").html(html).show();
				}
			});
		}
	</script>
</body>

</html>