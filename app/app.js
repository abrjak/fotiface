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

app.controller('LoginController', function($scope){
    $scope.title = 'Login Page';
});

app.controller('GalleryController', function($scope){
    $scope.title = "Gallery";
});

app.controller('UserController', function($scope, $http){
    $scope.title = "User Page";

    $http.get('app/api/dbGetAllUser.php').then(function(response){
        $scope.user = response.data;
    });
});

