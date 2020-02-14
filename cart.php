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

		<title>Cart | Shop Cart</title>

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
		</style>

    </head>
	<body ng-controller="cartController">
		<!-- HEADER -->
 <?php require 'includes/nav.php'; ?>
		
		<!-- /HEADER -->

	

		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">cart</li>
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
                
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">Cart</h3>
                        </div>
                    </div>

                </div>


			

            <div class="row">
                <div class="col-md-12">
                
                    <table class="table table-bordered">
					<thead>
					<tr>
                            <th>Cart ID</th>
                            <th>Products</th>
                            <th>Discount Price</th>
                            <th>Total Price</th>


                            <th>Quantity</th>
                        </tr>
					</thead>
                      
<tbody ng-if="cartdetails.length <= 0">
<tr >
                          <td colspan="5" class="text-center">Cart is empty</td>  
                        </tr></tbody>
						
						<tbody ng-if="cartdetails.length > 0">
                        <tr ng-repeat="cart in cartdetails" >
                            <td>{{$index+1}}</td>
                            <td>
                                <img src="http://localhost:81/shopcart/img/products/{{cart.image}}" width="30" style="float:left;">
                                <p>  {{cart.title}}</p>
                            </td>
                           
                            <td> {{cart.price}}</td>
                            <td> {{cart.total_price}}</td>

                            <td width="1">
                                <div class="input-number">
								<p>{{cart.quantity}}</p>

								<a ng-click="incQuan(cart)">
								<span class="qty-up">+</span>	
								</a>
								<a ng-click="decQuan(cart)">
								<span class="qty-down">-</span>
								</a>    
                                </div>
                            </td>
                        </tr>
						<tr>
                           <td></td>
                           <td></td>
                           <td><span class="pull-right">Total:</span></td>
                           <td><h3>{{total}}</h3></td>
                           <td></td>
                        </tr>
 </tbody>

                      

                    </table>

                    <div class="col-sm-12">
                        <button class="btn btn-success btn-lg pull-right">Buy Now</button>
                    </div>

					
                
                </div>
            </div>

           
            </div>
        </div>
	
	
		

		
		
		<!-- FOOTER -->
		<footer id="footer">
			

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							
							<span class="copyright">
								
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#Rupesh" target="_blank">Rupesh</a>
							
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