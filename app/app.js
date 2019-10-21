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
    when('/user', {
        templateUrl: 'app/views/user.template.php',
        controller: 'UserController'
    }).
    otherwise({
        redirectTo: '/login'
    });
});

app.controller('LoginController', function($scope, $http, $location){
    $scope.title = 'Login Page';

    $scope.error = "";

    $scope.submitLogin = function(){
        $http({
            method : "POST",
            url : "app/api/dbLogin.php",
            data : $scope.loginData
        }).then(function(response){
            if(response.data.error != ''){
                $scope.error = response.data.error;
            } else {
               $location.path('/gallery');
            }
        });
    };

});

app.controller('GalleryController', function($scope, $http){
    $scope.title = "Gallery";

    $http.get('app/api/dbGetUserImages.php').then(function(response){
        $scope.images = response.data;
    });
});

app.controller('UserController', function($scope, $http){
    $scope.title = "User Page";

    $http.get('app/api/dbGetAllUser.php').then(function(response){
        $scope.user = response.data;
    });
});

