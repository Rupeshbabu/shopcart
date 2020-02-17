<?php 
session_start();


?>


<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>User Details | Shop Cart</title>

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
        
        <link href="css/swal.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		

 <?php require 'includes/nav.php'; ?>


	

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">User Details</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">User Details</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section" ng-controller="">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					

                <div class="col-xs-12">
		
			<!-- tabs -->
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Orders History</a></li>
					<li><a href="#about" data-toggle="tab">Profile</a></li>
					<li><a href="#services" data-toggle="tab">Address</a></li>
					<li><a href="#contact" data-toggle="tab">Change Password</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="home">                
						<div class="col-md-10">
							<h1>Orders History</h1>
                                <table class="table table-bordered mt-2">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Product</th>
                                            <th>Product</th>
                                            <th>Product</th>
                                            <th>Product</th>
                                            <th>Product</th>
                                            <th>Product</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>1</td>
                                        <td>Product</td>
                                        <td>Product</td>
                                        <td>Product</td>
                                        <td>Product</td>
                                        <td>Product</td>
                                        <td>Product</td>
                                        <td>Product</td>
                                    </tbody>
                                </table>
						</div>
					</div> 
					<div class="tab-pane" id="about"> 
						<div class="col-md-10">
							<h1>Profile</h1>
							<form name="profileForm" ng-submit="btnAddress()">
									<div class="form-group">
										<input class="input" type="text" name="username" required ng-model="profile.username" placeholder="Username">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="phone" required ng-model="profile.phone" placeholder="phone no.">
									</div>
                                    
                                    <input type="submit" value="Submit" class="primary-btn pull-right">
								</form>                
						</div>
					</div>
				
					<div class="tab-pane" id="services"> 
						<div class="col-md-10">
							<h1>Address</h1>

                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    </div>
                                </div>

                            </div>
                            
							
						</div>
						<!-- /Shiping Details -->

					</div>	
					
				
					<div class="tab-pane" id="contact"> 
						 <div class="col-md-10">
							<h1>Change Password</h1>
							<form name="changepasswordForm" ng-submit="btnAddress()">
                                        <div class="form-group">
                                            <input class="input" type="password" name="password" required ng-model="pwd.password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="password" name="confirmpassword" required ng-model="pwd.confirmpassword" placeholder="Confirm Password">
                                        </div>
                                        <input type="submit" value="Submit" class="primary-btn pull-right">
                                    </form>                 
						 </div>
					</div>
				</div>
			</div>
			<!-- /tabs -->
		</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		

		
		
		<!-- FOOTER -->
		<footer id="footer">
			

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#Rupesh" target="_blank">Rupesh</a>
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