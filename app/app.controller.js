;(function(undefined) {
    const app = angular.module('mainApp');

app.controller('registerController', [ '$scope', '$http', 'shopFac' , 'SweetAlert', function($scope, $http, shopFac, SweetAlert){
console.log(shopFac);
    $scope.reg = {};
          $scope.emailCheck = () =>{
           
            if($scope.reg.email != null) {
                shopFac.postCurl(shopFac.baseUrl + 'users/checkEmail.php', {email:$scope.reg.email}).then(res => {
                  console.log(res.data);
                if(res.data.msg == 0) {

                    }else{
                        $scope.reg.email = '';
                    }
                }, error => {

                });
            }
            else {
                console.log('sdsd');
            }
        

        }
    $scope.btnSubmit = () =>{

       if($scope.regForm.$valid)
       {
        if($scope.reg.password == $scope.reg.cpassword){
            $scope.reg.user_uni_id = shopFac.guid();
            $scope.reg.dob = shopFac.dateFormat($scope.reg.db);
            $scope.reg.date = shopFac.dateFormat(new Date());

            shopFac.postCurl(shopFac.baseUrl + 'users/createUser.php', $scope.reg).then((res) =>{
                if(res.data.msg == 0)
                {
                    console.log($scope.reg)
                    SweetAlert.swal("Success", "Registration Success", "success")
                }
                else
                {
                    SweetAlert.swal("Error", "Opps! Registration Failed", "error")
                }
            })
        }
        else{
            SweetAlert.swal("Error", "Password doesn't match.", "error");
            $scope.reg.cpassword = '';
        }
           
       }
       else{
            SweetAlert.swal("Error", "Opps! Registration Failed", "error")
       }
    }

}]);

app.controller('loginController', [ '$scope', '$http', 'shopFac','SweetAlert', function($scope, $http, shopFac, SweetAlert){

    $scope.btnLogin = () =>{

        if($scope.loginForm.$valid)
       {
        //    shopFac.postCurl('http://192.168.0.120/shopcart/server/api/users/loginUser.php', $scope.login).then((res) =>{
            shopFac.postCurl(shopFac.baseUrl + 'users/loginUser.php', $scope.login).then((res) =>{
           console.log(res.data);
           if(res.data.msg == 0)
               {
                console.log($scope.login)
                SweetAlert.swal("Success", "Login Success", "success")
               }
               else
               {
                SweetAlert.swal("Error", "Invalid Details. Please enter valid details", "error")
               }
           })
           
       }
       else{
            SweetAlert.swal("Error", "OOPS..! Login Failed", "error")
       }

    }
}]);


app.controller('AddMainCategoryController', ['$scope','shopFac','SweetAlert', function($scope, shopFac, SweetAlert) {


    $scope.btnMain = () =>{
       
        if($scope.mainForm.$valid)
       {
           $scope.main.sub_category = "no"
           $scope.main.parent_id = "parent"

         shopFac.postCurl(shopFac.baseUrl + 'categories/createCategory.php', $scope.main).then((res) =>{
           console.log(res.data);
           if(res.data.msg == 0)
               {
                console.log($scope.main)
                SweetAlert.swal("Success", "Successfully Add Main Category", "success")
                $scope.main = { }
               }
               else
               {
                SweetAlert.swal("Error", "Already exists category name.", "error")
               }
           })
           
       }
       else{
            SweetAlert.swal("Error", "OOPS..! Somthing went wrong", "error")
       }
    }

    var mainload = () =>{
        shopFac.getCurl(shopFac.baseUrl + 'categories/getAllMainCategories.php').then((res) =>{
            $scope.maincategorylist = res.data;
        });
        shopFac.getCurl(shopFac.baseUrl + 'categories/allCategories.php').then((res) =>{
            $scope.allCategorylist = res.data;
        });
    }

    mainload();


    $scope.btnSubCat = () =>{

        if($scope.subForm.$valid)
       {
           $scope.sub.sub_category = "yes"

         shopFac.postCurl(shopFac.baseUrl + 'categories/createCategory.php', $scope.sub).then((res) =>{
           console.log(res.data);
           if(res.data.msg == 0)
               {
                mainload();
                console.log($scope.main)
                SweetAlert.swal("Success", "Successfully Add Sub Category", "success")
                $scope.sub = { }
               }
               else
               {
                SweetAlert.swal("Error", "Already exists sub category name.", "error")
               }
           })
           
       }
       else{
            SweetAlert.swal("Error", "OOPS..! Somthing went wrong", "error")
       }

    }


}]);


app.controller('addProductController', [ '$scope','shopFac','SweetAlert', function($scope, shopFac, SweetAlert){

    var catload = () =>{
        shopFac.getCurl( shopFac.baseUrl + 'categories/getAllMainCategories.php').then((res)=>{
            $scope.catoptions = res.data;
        })
    }

    
    $scope.getSelectedMainCategory = function (id) {

        
        
        shopFac.postCurl(shopFac.baseUrl + 'categories/getSubSingleCategory.php', {parent_id:id.id}).then((res)=>{
       console.log(res.data)
       $scope.suboptions = res.data;
    })
      
    };

    $scope.btnAddProduct = () =>{
        if($scope.productForm.$valid){

            $scope.product.added_date = shopFac.dateFormat(new Date());
            $scope.product.category = $scope.product.democate.name;
            $scope.product.product_uni_id = shopFac.guid();


            var fd= new FormData();

            angular.forEach($scope.files, (file) =>{
                fd.append("file[]",file);
            });

            var obj = JSON.stringify($scope.product);

            fd.append("productForm",obj);



           shopFac.imgPost(shopFac.baseUrl + 'products/createProduct.php',fd).then((res) =>{
           console.log(res.data);
           if(res.data.msg == 0)
               {
                console.log($scope.main)
                SweetAlert.swal("Success", "Successfully Add Product", "success")
                $scope.product = { }
               }
               else
               {
                SweetAlert.swal("Error", "Failed to add prouct.", "error")
               }
           })

            console.log($scope.product);
        }
        else
        {
            SweetAlert.swal("Error", "OOPS..! Somthing went wrong", "error")
        }
       
    }
    

catload();

}]);


app.controller('projectListController',['$scope','shopFac', function($scope, shopFac){

    var productslist = () =>{
        shopFac.getCurl(shopFac.baseUrl + 'products/getAllProducts.php').then((res)=>{
            console.log(res.data);
            $scope.products = res.data;
        })
    }

    productslist();

}]);


app.controller('userProductList', ['$scope', 'shopFac', function($scope, shopFac){

    var products = () =>{
        shopFac.getCurl(shopFac.baseUrl + 'products/getAllProducts.php').then((res) =>{
            console.log(res.data);
            $scope.allproducts = res.data;
        })
    }

    products();

}]);
    
    

}.call(this));
