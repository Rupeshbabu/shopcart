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

    <title>Checkout | Shop Cart</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

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
        padding: 20px 0;
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

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover {
        background-color: ;
    }

    .radio {
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
    <?php require 'includes/nav.php'; ?>


    <!-- /NAVIGATION -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                        </div>
                        <hr>
                        <div class="card mb-3">
                            <div class="row no-gutters" ng-repeat="address in addresslist">
                                <div class="col-md-1">
                                    <input type="radio" name="addressid" id="address"
                                        style="width:50px; margin-top:10px;" required>
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <span><b class="card-title">{{address.username}}</b>
                                            <p class="card-text">{{address.address}}, {{address.landmark}},
                                                {{address.city}}, {{address.state}}, {{address.pincode}}, +91
                                                {{address.phone}}</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2" style="margin-top:20px;">
                                    <a ng-click="btndelete(address)" class="btn btn-danger btn-sm"><i
                                            class="fa fa-times"></i> Remove</a>
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
                                        <input class="input" type="text" name="username" required
                                            ng-model="address.username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="address" required
                                            ng-model="address.address" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="street" required
                                            ng-model="address.street" placeholder="Street">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="landmark" required
                                            ng-model="address.landmark" placeholder="Landmark">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="city" required ng-model="address.city"
                                            placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="state" required ng-model="address.state"
                                            placeholder="State">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="pincode" required
                                            ng-model="address.pincode" placeholder="ZIP Code">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="phone" required ng-model="address.phone"
                                            placeholder="Mobile Number">
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
                            <div class="order-col" ng-repeat="ite in item">
                                <div>{{ite.quantity}}x {{ite.title}}</div>
                                <div>₹ {{ite.total_price}}</div>
                            </div>
                            <!-- <div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div> -->
                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">₹{{total}}</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                    <form method="post">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Pay on <b>Razorpay</b>
                            </label>
                            <div class="caption">
                                <p>Supported for all Major Banks and Rupay, UPI and other wallets</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2" data-toggle="modal"
                                data-target="#exampleModal">
                            <label for="payment-2">
                                <span></span>
                                Pay on <b>Amazin Coins</b>
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!-- <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3">
                            <label for="payment-3">
                                <span></span>
                                COD(Cash on Delivery)
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div> -->
                    </div>
                    </form>
                    
    <form method="POST" id="div1">
	<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_0hQozE5ygRwc6k" // Enter the Key ID generated from the Dashboard
    data-amount="{{total}}.'00'" // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.
    data-buttontext="Pay with Razorpay"
    data-name="Acme Corp"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="Gaurav Kumar"
    data-prefill.email="mythilisrikota@gmail.com"
    data-prefill.contact="8125370426"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">

</form>
    
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
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#div1").hide();
        $("#payment-1").click(()=>{
            $("#div1").show();
                  //  alert();

            $('#payment-2').click(()=>{
                $("#div1").hide();
            })
        })
    });
</script>
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
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="#Rupesh" target="_blank">Rupesh</a>
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