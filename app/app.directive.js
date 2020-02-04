;(function(undefined) {
    const app = angular.module('mainApp');

    app.directive('fileInput', function($parse){
       return{
           link: ($scope, element, attrs) =>{
                element.on("change", (event) =>{
                    console.log(element[0].files);
                    $parse(attrs.fileInput).assign($scope, element[0].files);
                    $scope.$apply();
                });
           }
       }
    });
 

}.call(this));
