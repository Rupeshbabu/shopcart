;(function(undefined) {
    const app = angular.module('mainApp');

app.controller('registerController', [ '$scope', '$http', 'SweetAlert', function($scope, $http, SweetAlert){

    $scope.btnSubmit = () =>{

        $scope.emailCheck = () =>{

        }


       if($scope.regForm.$valid)
       {
        if($scope.reg.password == $scope.reg.cpassword){

            $http.post('').then((res) =>{
                
            })

            console.log($scope.reg)
           SweetAlert.swal("Success", "Registration Success", "success")
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

app.controller('loginController', [ '$scope', '$http', 'SweetAlert', function($scope, $http, SweetAlert){

    $scope.btnLogin = () =>{

        if($scope.loginForm.$valid)
       {
           console.log($scope.reg)
           SweetAlert.swal("Success", "Registration Success", "success")
       }
       else{
            SweetAlert.swal("Error", "Not Registration Success", "error")
       }

    }
}]);

    

}.call(this));
