<?php
require_once("config/db.php");
if($_POST)
{
    $pro_sub_menu=$_POST['search'];

    $data=mysqli_query($way,"SELECT * FROM `product_detail` WHERE `sub_cate` = '$pro_sub_menu' ");
    while($row7=mysqli_fetch_array($data,MYSQLI_ASSOC))
    {
        $pro_title=$row7['pro_title'];
        $pro_id=$row7['pro_id'];
        $pro_price=$row7['pro_price'];
        $data5=mysqli_query($way,"SELECT * FROM `product_image` WHERE `pro_ref_id`= $pro_id ORDER BY `img_id` ASC LIMIT 1;");
        $row5=mysqli_fetch_array($data5,MYSQLI_ASSOC);
        $pro_image_name=$row5['pro_image_name'];
        ?>
        <div class="grid_1_of_4 images_1_of_4">
							<h4><a href="preview.html"><?= $pro_title; ?></a></h4>
							<a href="preview.html"><img src="<?php echo $pro_image_name;?>" alt="" style="width:100%; height:200px" /></a>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees">$ <?= $pro_price; ?></span></p>
								</div>
								<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
								</div>
								<div class="clear"></div>
							</div>
						</div>
				<?php
    }
}

