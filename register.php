<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Registration | Shop Cart</title>

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
						<h3 class="breadcrumb-header">Registration Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Registration</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section" ng-controller="registerController">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-6 col-md-offset-3">

						<form name="regForm"  ng-submit="btnSubmit()">
							<div class="form-group">
							  <label>Username:</label><span class="text-danger">*</span>
							  <input type="text" class="input" ng-model="reg.username" required placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email:</label><span class="text-danger">*</span>
                                <input type="email" class="input" ng-model="reg.email" ng-blur="emailCheck()" required  placeholder="Enter Email Address">
                              </div>
                              <div class="form-group">
                                <label>Mobile Number:</label><span class="text-danger">*</span>
                                <input type="text" class="input" ng-model="reg.phone" required  placeholder="Enter Mobile Number">
                              </div>
                              <div class="form-group">
                                  <label>Gender:</label><span class="text-danger" style="margin-right:20px;">*</span>
                                  
                                    <input class="form-check-input" value="male" required type="radio" ng-model="reg.gender" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                 
                                    <input class="form-check-input" value="female" required type="radio" ng-model="reg.gender" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                  
                              </div>
                              <div class="form-group">
                                <label>Date of Birth:</label><span class="text-danger">*</span>
                                <input type="date" class="input" ng-model="reg.db" required>
                              </div>
							<div class="form-group">
							  <label>Password:</label><span class="text-danger">*</span>
							  <input type="password" class="input" ng-model="reg.password" required  placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label><span class="text-danger">*</span>
                                <input type="password" class="input" ng-model="reg.cpassword" required  placeholder="Confirm Password">
                              </div>
							<button type="submit" class="primary-btn cta-btn">Register</button>
                          </form>
                          
                          <hr>
                    <a href="login.php" class="success-btn cta-btn">Already exist ?  Login</a>

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