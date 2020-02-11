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
								
                                <?php if(!isset($_SESSION['user_uni_id'])){

                                 ?>
								<div><a href="login.php"><i class="fa fa-lock"></i><span>Sign In</span></a></div>
								<div><a href="register.php"><i class="fa fa-user-o"></i><span>Sign Up</span></a></div>
 <?php 
                                    
                                } else { ?>
                                <div><a href="profile.php"><i class="fa fa-user-circle-o"></i><span>Rupesh</span></a></div>
								<!-- <div><a href="logout.php?prevPage=<?php echo urlencode($_SERVER['REQUEST_URI']);  ?>"><i class="fa fa-sign-out"></i><span>Sign Out</span></a></div> -->
								<div><a href="logout.php"><i class="fa fa-sign-out"></i><span>Sign Out</span></a></div>
								<div><a href="cart.php"><i class="fa fa-shopping-cart"></i><span>Your Cart</span><div class="qty">3</div></a></div>

                                <?php 
                                    
                                }  ?>
								
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
						<!-- <li>
						<div class="dropdown">
							<a href="">CATEGORIES<span class="caret"></span></a>
								<ul class="dropdown-content">
									<li ng-repeat="cat in categories">
									<a href="/{{cat.name}}">{{cat.name | uppercase}}</a>
									</li>
								</ul>		
							</div>		
						</li> -->
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>

		<!-- /NAVIGATION -->