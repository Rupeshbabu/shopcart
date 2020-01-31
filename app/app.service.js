;(function(undefined) {
    const app = angular.module('mainApp');
// SHA256:nThbg6kXUpJWGl7E1IGOCspRomTxdCARLviKw6E5SY8.
    angular.module('mainApp').factory('shopFac',function($http){
        var allsort = {};
        const baseUrl = '/shopcart/';

        allsort.postCurl = (url, data) =>  $http.post(url,data).then(res => res);
        allsort.getCurl = (url) =>  $http.get(url).then(res => res);

        allsort.guid = () =>{
            return allsort.so() + allsort.so() + allsort.so();

        }
        allsort.so = () =>{
            return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);


        }

        allsort.dateFormat = (date) => {

            const d = new Date(date);

            var day = d.getDate();
            var month = d.getMonth() + 1;
            var year = d.getFullYear();

            if(day <= 9) {
                day = '0'+day;
            }

            if(month <= 9) {
                month = '0'+month;
            }

            var finalDate = day + '-' + month + '-' + year;

           return finalDate;

        }

        return allsort;

    });

    

}.call(this));
