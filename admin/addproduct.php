<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Product | Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="../admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">


    <link href="../css/swal.css" rel="stylesheet">
</head>
<body>

    <div class="dashboard-main-wrapper">

     <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Shopcart</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                       
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Rupesh </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="index.php">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="index.php"><i class="fas fa-box-open"></i>Dashboard <span class="badge badge-success">6</span></a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-box"></i>Product</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="addproduct.php">Add Product <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addcategory.php">Add Categories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="productlist.php">Product list</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="searchproduct.php">Search Product</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-boxes"></i>Orders</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pendingorders.php">Pending Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="deliveredorder.php">Delivered Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="failedorder.php">Failed Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="searchorder.php">Search Order</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-divider">
                                Users
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-user-circle"></i>Users list</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="userlist.php">Users</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="applyuserproducts.php">Apply User Product list</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="searchuser.php">Search User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->



        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row" ng-controller="addProductController">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add product</h5>
                                <div class="card-body">
                                    <form name="productForm" ng-submit="btnAddProduct()">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Title</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required ng-model="product.title" placeholder="Type something" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <textarea required ng-model="product.description" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Specification</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <textarea required ng-model="product.spec" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Price</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required ng-model="product.price" placeholder="Type original cost" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Discount Cost</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required ng-model="product.discount_price" placeholder="Type discount cost" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Select Category</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select  class="form-control" reqired ng-model="product.democate" ng-change="getSelectedMainCategory(product.democate)" ng-options="mc as mc.name for mc in catoptions">
                                                    <option value="" disabled>-Select Category-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Select Sub Category</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select  class="form-control" reqired ng-model="product.sub_category" ng-options="sc.name as sc.name for sc in suboptions">
                                                    <option value="" disabled>-Select Sub Category-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Brand Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required ng-model="product.brand" placeholder="Enter Product Brand Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Upload product image</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file" required file-input="files" multiple class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Quantity</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required ng-model="product.quantity" class="form-control">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
                        
                    </div>
                    </div>

                </div>
            </div>
        </div>
</div>


<!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->

     <!--AngularJS-->
     <script src="../dist/app.bundle.js"></script>

    <!-- Optional JavaScript -->
    <script src="../admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../admin/assets/vendor/parsley/parsley.js"></script>
    <script src="../admin/assets/libs/js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
    
</body>
</html>