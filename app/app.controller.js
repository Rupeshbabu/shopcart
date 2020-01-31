;(function(undefined) {
    const app = angular.module('mainApp');

app.controller('registerController', [ '$scope', '$http', 'shopFac' , 'SweetAlert', function($scope, $http, shopFac, SweetAlert){
console.log(shopFac);
    $scope.reg = {};
          $scope.emailCheck = () =>{
           
            if($scope.reg.email != null) {
                shopFac.postCurl('http://localhost:81/shopcart/server/api/users/checkEmail.php', {email:$scope.reg.email}).then(res => {
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

            shopFac.postCurl('http://localhost:81/shopcart/server/api/users/createUser.php', $scope.reg).then((res) =>{
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
            shopFac.postCurl('http://localhost:81/shopcart/server/api/users/loginUser.php', $scope.login).then((res) =>{
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

    

}.call(this));
