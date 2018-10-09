<?php 
 require_once 'class/class_application.php';
 $view_product= new application();
 $query=$view_product->View();





 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bxslider.css">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
</head>
<body>
		<div id="header_top">
			
			<ul>
				<li><a href="#">Register</a></li>
				<li>or</li>
				<li><a href="login.html">Login</a></li>
			</ul>
		</div>
		<div id="header">
			<div id="logo">
				<img src="asset/img/ecomerce.png">
			</div>
			<div class="shipping">
				
				<p><strong><a href="#">Free Shipping</a></strong></h5><br>all order over 200Tk</p>
			</div>
			<div class="shipping">
				<p><strong><a href="#">Return & Exchange</a></strong></h5><br>in 3 working days</p>
			</div>
			<div class="shipping">
				<p><strong><a href="#">Free Shipping</a></strong></h5><br>call for anyting to ASK</p>
			</div>
			<div class="Shopping_Cart">
				<p><b><a href="#">SHOPPING CART</a></b><br>0 item(s)-0/-</p>
			</div>
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Wall Clock</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
		
		<div class="container">
			<img src="asset/img/slider image.jpg" height="450" width="1270">
			<img src="asset/img/slider image 2.jpg" height="450" width="1270">
			<img src="asset/img/slider image 3.jpg" height="450" width="1270">
			<img src="asset/img/slider image 4.jpg" height="450" width="1270">
		</div>

        <div class="container">
        	<div class="row">
        		<div class="col-lg-12">
        			<div class="well">
        				<main role="main">
				           <div class="row">
				           	<?php while ($product_info=mysqli_fetch_assoc($query)) { ?>
					         <div class="col-lg-4" style="background-color:rgb(240, 240, 240);">
					            <img src="img/<?php echo $product_info['product_image']; ?>" style="height: 250px; width: 200px; margin:0 auto;">
					            	<h5><?php echo $product_info['product_title']; ?></h5>
					            	<p><b>BDT-<?php echo $product_info['product_price']; ?></b></p>
					            <p><a class="btn btn-secondary" href="#" role="button">Add Cart</a></p>
					         </div>
					     	<?php } ?>
				     	   </div>
				     	   <hr>
				        </main>
        			</div>
        		</div>
        	</div>
        </div>
        
		<div class="fotter">
			<div class="sitebar">
				<h3>INFORMATION</h3>
				<ul>
					<li><a href="delivery_info.html">Delivery Information</a></li>
					<li><a href="Privacy_Policy.html">Privacy Policy</a></li>
					<li><a href="#">Terms & Conditions</a></li>
				</ul>
			</div>
			<div class="sitebar">
				<h3>Customer Service</h3>
				<ul>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Returns</a></li>
					<li><a href="#">Site Map</a></li>
					<li><a href="#">Gift Vouchers</a></li>
				</ul>
			</div>
			<div class="sitebar">
				<h3>Extras</h3>
				<ul>
					<li><a href="#">Brands</a></li>
					<li><a href="#">Gift Vouchers</a></li>
					<li><a href="#">Affiliates</a></li>
					<li><a href="#">Specials</a></li>
				</ul>
			</div>
			<div class="sitebar">
				<h3>My Account</h3>
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Order History</a></li>
					<li><a href="#">Wish List</a></li>
					<li><a href="#">Newsletter</a></li>
				</ul>
			</div>
			<h6>Copyright@abujoha</h6>
			<div class="social">
				<ul>
					<li><a href="#"><img src="asset/img/facebook.png" height="20" width="30"></a></li>
					<li><a href="#"><img src="asset/img/youtube.png" height="20" width="30"></a></li>
					<li><a href="#"><img src="asset/img/pinterest.png" height="20" width="30"></a></li>
					<li><a href="#"><img src="asset/img/instagram.png" height="20" width="30"></a></li>
				</ul>
			</div>
		</div>
		<script src="asset/js/jquery-3.2.1.min.js"></script>
	<script src="asset/js/jquery.bxslider.js"></script>
    <script src="asset/js/sxript.js"></script>
</body>
</html>


