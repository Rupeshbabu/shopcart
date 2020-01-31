;(function(undefined) {
    const app = angular.module('mainApp');

app.controller('registerController', function($scope, $http){

    $scope.btnSubmit = () =>{
       if($scope.regForm.invalid)
       {
           alert(no)
       }
       else{
           alert(yes)
       }
    }

});

app.controller('loginController', function($scope, $http){

    $scope.btnLogin = () =>{

    }
})

    

}.call(this));
