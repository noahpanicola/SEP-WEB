var indexApp = angular.module("IndexApp", []);
indexApp.controller('indexController', function ($scope, $http) {

    var url_string = window.location.href
    var url = new URL(url_string);
    var uid = url.searchParams.get("uid");

    $http.get('http://localhost:8080/property/uid=' + uid).
        success(function(data, status, headers, config){
            $scope.properties = data;
            $scope.tenants = data[0].tenants;

            console.log(data);
        }).error(function(data, status, headers, config){
            console.log("There was an error getting the user's properties.");
        });

    $http.get('http://localhost:8080/user/' + uid).
        success(function(data, status, headers, config){
        $scope.user = data;
        console.log(data);
    }).error(function(data, status, headers, config){
        console.log("There was an error getting the user.");
    });
});