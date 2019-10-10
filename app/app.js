var app = angular.module('fotiface', ['ngRoute']);
app.config(function($routeProvider){
    $routeProvider.
    when('/home', {
        templateUrl: ('app/views/home.template.html'),
        controller: 'HomeController'
    }).
    when('/user', {
        templateUrl: ('app/views/user.template.html'),
        controller: 'UserController'
    }).
    otherwise({
        redirectTo: '/home'
    });
});

app.controller('HomeController', function($scope){
    $scope.title = "Home Page";
});

app.controller('UserController', function($scope, $http){
    $scope.title = "User Page";

    $http.get('app/api/dbGetAllUser.php').then(function(response){
        $scope.user = response.data;
    })
});

