;(function(undefined) {
    const app = angular.module('mainApp');
// SHA256:nThbg6kXUpJWGl7E1IGOCspRomTxdCARLviKw6E5SY8.
    angular.module('mainApp').factory('shopFac',function($http, $window){
        var allsort = {};
        const baseUrl = '/shopcart/';


        allsort.baseUrl = 'http://192.168.0.102/shopcart/server/api/'

        allsort.postCurl = (url, data) =>  $http.post(url,data).then(res => res);
        allsort.getCurl = (url) =>  $http.get(url).then(res => res);

        allsort.click = () => {
            console.log('clicked');
        }

        allsort.addCart = (p) => {
            allsort.getCurl('http://localhost:81/shopcart/server/api/users/checkSessions.php').then((res)=>{
                if(res.data.msg == 0)
                {
                    var cart = {product_uni_id: p.product_uni_id, cart_uni_id: allsort.guid(), title:p.title,       image:p.images[0], price:p.price, quantity: 1} 

                    allsort.postCurl(allsort.baseUrl + '/cart/createCart.php', cart).then((res) =>{
                        console.log(res.data)
                    })
                }
                else
                {
                    $window.location.href= "/shopcart/logout.php";
                }
            })
        }
    

        allsort.imgPost = (url,data) => {
            return $http({
                method:"post",
                url:url,
                transformRequest: angular.identity,
                data:data,
                headers:{
                    'Content-Type':undefined
                }
            }).then(res => res);
        }

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
