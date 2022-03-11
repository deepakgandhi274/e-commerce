<?php
require_once("config/db.php");
if ($_POST) {


	$data7 = mysqli_query($way, "SELECT * FROM `product_detail`");
	while ($row7 = mysqli_fetch_array($data7, MYSQLI_ASSOC)) {
		// echo "<pre>";
		// print_r($row7);
		$pro_title = $row7['pro_title'];
		$pro_id = $row7['pro_id'];
		$pro_price = $row7['pro_price'];
		$data5 = mysqli_query($way, "SELECT * FROM `product_image` WHERE `pro_ref_id`=$pro_id ORDER BY `img_id` ASC LIMIT 1;");
		$row5 = mysqli_fetch_array($data5, MYSQLI_ASSOC);
		$pro_image_name = $row5['pro_image_name'];

?>
		<div class="grid_1_of_4 images_1_of_4">
			<h4><a href="preview.php?id=<?php echo $pro_id; ?>"><?= $pro_title; ?></a></h4>


			<a href="preview.php?id=<?php echo $pro_id; ?>"><img src="<?php echo $pro_image_name; ?>" alt="" style="width:100%;height:200px" /></a>


			<div class="price-details">
				<div class="price-number">
					<p><span class="rupees">$ <?= $pro_price; ?></span></p>
				</div>
				<div class="add-cart">
					<h4><a href="preview.php">More Info</a></h4>
				</div>
				<div class="clear"></div>
			</div>
		</div>
<?php
	}
}
