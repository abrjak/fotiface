module('dbTest').
component('dbTest', {
    templateUrl: 'app/dbtest/dbtest.template.html',
    controller: function DbTestController($http){
        var self = this;

        $http.get('app/api/dbGetTst.php').then(function (response){
            self.tesdata = response.data;
        });
    }
});