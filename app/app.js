var app = angular.module('fotiface', ['ngRoute']);
app.config(function($routeProvider){
    $routeProvider.
    when('/login', {
        templateUrl: 'app/views/login.template.php',
        controller: 'LoginController' 
    }).
    when('/home', {
        templateUrl: 'app/views/home.template.php',
        controller: 'HomeController'
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

app.controller('HomeController', function($scope){
    $scope.title = "Home Page";
});

app.controller('UserController', function($scope, $http){
    $scope.title = "User Page";

    $http.get('app/api/dbGetAllUser.php').then(function(response){
        $scope.user = response.data;
    });
});

