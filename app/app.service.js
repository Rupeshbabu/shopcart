;(function(undefined) {
    const app = angular.module('mainApp');

    // const url = 'http://192.168.0.114/shopcart/server/api/';
    const url = 'http://localhost:81/shopcart/server/api/';
    
    const urls = {
        address : {
            createAdrs:url+"address/createAdrs.php",
            deleteAdrs:url+"address/deleteAdrs.php",
            getAllAdrs:url+"address/getAllAdrs.php",

        },
        cart:{
            createCart:url+"cart/createCart.php",
            getallCarts:url+"cart/getallCarts.php",
            updateCart:url+"cart/updateCart.php",

        },
        categories:{
            allCategories:"/categories/allCategories.php",
            createCategory:"/categories/createCategory.php",
            allCategories:"/categories/allCategories.php",
            allCategories:"/categories/allCategories.php",
            allCategories:"/categories/allCategories.php",
            allCategories:"/categories/allCategories.php",

        },
        orders:{},
        products:{},
        users:{}
    };
    
// SHA256:nThbg6kXUpJWGl7E1IGOCspRomTxdCARLviKw6E5SY8.
    angular.module('mainApp').factory('shopFac',function($http, $window, SweetAlert){
        var allsort = {};
        const baseUrl = '/shopcart/';
        // allsort.baseUrl = 'http://192.168.0.114/shopcart/server/api/';
        allsort.baseUrl = 'http://localhost:81/shopcart/server/api/';

        
        allsort.allUrls = urls;


        //    allsort.baseUrl = 'http://localhost:81/shopcart/server/api/'

        allsort.postCurl = (url, data) =>  $http.post(url,data).then(res => res);
        allsort.getCurl = (url) =>  $http.get(url).then(res => res);

        allsort.click = () => {
            console.log('clicked');
        }

        allsort.addCart = (p) => {
            allsort.getCurl('http://localhost:81/shopcart/server/api/users/checkSessions.php').then((res)=>{
                if(res.data.msg == 0)
                {
                    var cart = {product_uni_id: p.product_uni_id, cart_uni_id: allsort.guid(), title:p.title,image:p.images[0], price:p.discount_price, quantity: 1} 

                    allsort.postCurl(allsort.baseUrl + '/cart/createCart.php', cart).then((res) =>{

                        if(res.data.msg == 0)
                        {
                            SweetAlert.swal("Success", "Please go to checkout in cart ", "success");
                            console.log(res.data)
                        }
                        else{
                            SweetAlert.swal("Warning", "Already added in cart. ", "warning");
                        }
                        
                        
                    })
                }
                else
                {
                    $window.location.href= "/shopcart/logout.php?prevPage=/shopcart/index.php";
                }
            })
        }

        allsort.buyNow = (p) => {
            allsort.getCurl('http://localhost:81/shopcart/server/api/users/checkSessions.php').then((res)=>{
                if(res.data.msg == 0)
                {
                   
                }
                else
                {
                    $window.location.href= "/shopcart/logout.php?prevPage=/shopcart/index.php";
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
