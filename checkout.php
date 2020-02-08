<?php
include("sessions.php");

isNotLogin();
?>

<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Shop Cart</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


		<![endif]-->
		<link href="css/swal.css" rel="stylesheet">

		<style>
			

.dropdown {
  position: relative;
  display: inline-block;
  padding:20px 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block; }

.dropdown:hover {background-color: ;}

.radio{
	position: absolute;
  left: 0px;
  top: 4px;
  width: 14px;
  height: 14px;
  border: 2px solid #E4E7ED;
  background: #FFF;
}
		</style>

    </head>
	<body ng-controller="addressController">
		<!-- HEADER -->
		<header>
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-4">
							<!-- <div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div> -->
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-5 clearfix">
							<div class="header-ctn">
								<!-- login & register -->
								
								<div><a href="login.php"><i class="fa fa-lock"></i><span>Sign In</span></a></div>
								<div><a href="register.php"><i class="fa fa-user-o"></i><span>Sign Up</span></a></div>
								
								<!-- /login & register -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">HOME</a></li>
						<li>
						<div class="dropdown">
							<a href="">CATEGORIES<span class="caret"></span></a>
								<ul class="dropdown-content">
									<li ng-repeat="cat in categories">
									<a href="/{{cat.name}}">{{cat.name | uppercase}}</a>
									</li>
								</ul>		
							</div>		
						</li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>

		<!-- /NAVIGATION -->







<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign in Amazin Coins</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="input" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="input" id="exampleInputPassword1">
		</div>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

		
		

	<!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Select Shipping address</h3>
							</div><hr>
							<div class="card mb-3">
								<div class="row no-gutters" ng-repeat="address in addresslist">
									<div class="col-md-1">
										<input type="radio" name="addressid" id="address" style="width:50px; margin-top:10px;">
									</div>
									<div class="col-md-9">
										<div class="card-body">
										<span><b class="card-title">{{address.username}}</b><p class="card-text">{{address.address}}, {{address.landmark}}, {{address.city}}, {{address.state}}, {{address.pincode}}, +91 {{address.phone}}</p></span>	
										</div>
									</div>
									<div class="col-md-2" style="margin-top:20px;">
										<a ng-click="btndelete(address)" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Remove</a>
									</div>
								</div>
						
								
							</div>


						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Add New Address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									New Address
								</label>
								<input type="hidden" value="<?php echo $_SESSION['user_uni_id']; ?>" id="user_uni_id">
								<input type="hidden" value="<?php echo $_SESSION['email']; ?>" id="email">
								<input type="hidden" value="<?php echo $_SESSION['username']; ?>" id="username">
						

								<div class="caption">
								<form name="addressForm" ng-submit="btnAddress()">
									<div class="form-group">
										<input class="input" type="text" name="username" required ng-model="address.username" placeholder="Username">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" required ng-model="address.address" placeholder="Address">
									</div>
                                    <div class="form-group">
										<input class="input" type="text" name="street" required ng-model="address.street" placeholder="Street">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="landmark" required ng-model="address.landmark" placeholder="Landmark">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" required ng-model="address.city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="state" required ng-model="address.state" placeholder="State">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="pincode" required ng-model="address.pincode" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="phone" required ng-model="address.phone" placeholder="Mobile Number">
									</div>
                                    <input type="submit" value="Submit" class="primary-btn pull-right">
								</form>
								</div>
								
							</div>
						</div>
						<!-- /Shiping Details -->

						
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$2940.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Pay on <b>Razorpay</b>
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2" data-toggle="modal" data-target="#exampleModal">
								<label for="payment-2">
									<span></span>
									Pay on <b>Amazin Coins</b>
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									COD(Cash on Delivery)
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		


		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		 <!--AngularJS-->
		 <script src="dist/app.bundle.js"></script>


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>