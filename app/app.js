var app = angular.module('fotiface', ['ngRoute']);
app.config(function($routeProvider){
    $routeProvider.
    when('/login', {
        templateUrl: 'app/views/login.template.php',
        controller: 'LoginController' 
    }).
    when('/gallery', {
        templateUrl: 'app/views/gallery.template.php',
        controller: 'GalleryController'
    }).
    otherwise({
        redirectTo: '/login'
    });
});

app.controller('LoginController', function($scope, $http, $location){

    $http.get('app/api/getPHPSession.php').then(function(response){
       if(response.data == 0){

        $scope.title = 'Login';

        $scope.closeMsg = function(){
            $scope.alertMsg = false;
        }

        $scope.submitLogin = function(){
            $http({
                method : "POST",
                url : "app/api/dbLogin.php",
                data : $scope.loginData
            }).then(function(response){
                if(response.data.error != ''){
                    $scope.alertMsg = true;
                    $scope.alertMessage = response.data.error;
                } else {
                   $location.path('/gallery');
                }
            });
        };
       } else {
           $location.path('/gallery');
       }
    });

   

});

app.controller('GalleryController', function($scope, $http, $location){
    $scope.title = "Gallerie";

    $http.get('app/api/getPHPSession.php').then(function(response){
        if(response.data == 0){
            $location.path('/login');
        } else {
            $http.get('app/api/dbGetUserImages.php').then(function(response){
                $scope.images = response.data;
            });

            $scope.submitLogout = function(){
                $http.get('app/api/destroyPHPSession.php').then(function(){
                        $location.path('/login');
                });
            };

        }
    });
});
