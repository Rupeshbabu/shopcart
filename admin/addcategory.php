<!DOCTYPE html>
<html lang="en" ng-app="mainApp">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Category | Admin</title>
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

        <div class="dashboard-wrapper" ng-controller="AddMainCategoryController">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                 <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Add Categories </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                                        
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Main Category</h5>
                                <div class="card-body">
                                    <form name="mainForm" ng-submit="btnMain()">
                                        <div class="form-group">
                                            <label>Main Category</label>
                                            <input type="text" name="name" required placeholder="Enter user name" ng-model="main.name" class="form-control">
                                            <span class="text-danger" ng-show="mainForm.category.$dirty && mainForm.category.$invalid">* Required field</span>
                                        </div>
                                        
                                            <div class="col-sm-12">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- horizontal form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Sub Category</h5>
                                <div class="card-body">
                                    <form name="subForm" ng-submit="btnSubCat()">
                                        <div class="form-group">
                                            <label>Category</label>
                                                <select class="form-control" ng-model="sub.parent_id" ng-options="m.id as m.name for m in maincategorylist">
                                                    <option value="" disabled>-Select Main Category-</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                                <input type="text" required ng-model="sub.name" placeholder="Type sub category" class="form-control">
                                        </div>
                                        
                                            <div class="col-sm-12">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end horizontal form -->
                        <!-- ============================================================== -->
                    
    

   
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Category List</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Main Category</th>
                                                <th scope="col">Sub Category</th>
                                                <th scope="col">Parent_Name</th>
                                                <th scope="col">Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="cat in allCategorylist">
                                                <th scope="row">{{$index+1}}</th>
                                                <td>{{cat.name}}</td>
                                                <td>{{cat.sub_category == 'yes' ? "True" : "False" }}</td>
                                                <td>{{cat.parent_id}}</td>
                                                <td>{{cat.status}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
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