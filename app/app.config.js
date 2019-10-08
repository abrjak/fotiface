angular.
module('fotiface').
config(['$routeProvider',
    function config($routeProvider) {
        $routeProvider.
        when('/dbtest', {
            template: '<dbtemplate></dbtemplate>'
        }).
        otherwise('/');
    }
]);