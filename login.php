<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
include("includes/db.php");

$email = mysqli_real_escape_string($db,$_POST['email']);
$mypassword = md5(mysqli_real_escape_string($db,$_POST['password'])); 
    
$sql = "SELECT * FROM users WHERE email = '$email' and pwd = '$mypassword'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  
if($count == 1) {
    session_start();
//    session_register("email");
//    session_register("user_uni_id");
//    session_register("username");
//    session_register("phone");

   $_SESSION['email'] = $email;
   $_SESSION['user_uni_id'] = $row['user_uni_id'];
   $_SESSION['username'] = $row['username'];
   $_SESSION['phone'] = $row['phone'];

   if(isset($_GET['prevpage'])) {
    $url = $_GET['prevpage']; // holds url for last page visited.
   }else {
    $url = "index.php"; 
   }
   header("location:$url");
// header("location:checkout.php");

}else {
    
   $error = "Your Login Name or Password is invalid";
//    echo'<script>alert("no")</script>';
}

    }



    ?>


<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Login | Shop Cart</title>

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

        <div class="container" ng-controller="loginController">
            <!-- row -->

				<div class="row" style="margin-top:100px;">

					<div class="col-md-4 col-md-offset-4">
    <?php echo @$_GET["prevpage"]; ?>
                        <div class="row">
                        <div class="col-md-4">
                            <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Login Page</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>

                        <div class="row">
                        <?php if(isset($error)) { ?>
						<div class="alert alert-danger ">
                            <p>Please enter valid details.</p>
                        </div>
  <?php } ?>
                        </div>

                        <div class="row">
                        <form action="" method="post" style="padding:10px;">
							<div class="form-group">
							  <label>Email</label>
							  <input type="email" class="input" required name="email" placeholder="Enter Email Address">
                            </div>

							<div class="form-group">
							  <label>Password</label>
							  <input type="password" class="input" required  name="password" placeholder="Password">
                            </div>
                            <input type="hidden" name="redirurl" value="<?php echo urlencode($_SERVER["REQUEST_URI"]); ?>" />

							<button type="submit" class="primary-btn cta-btn">Submit</button>
                          </form>
                          
                          <hr>
                          
                              <a href="register.php" class="success-btn cta-btn">Sign Up</a>
                              <a href="#" class="default-btn cta-btn pull-right">Forget password ?</a>
                          
                          


                        </div>

					</div>

					


				</div>
				<!-- /row -->
        </div>





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