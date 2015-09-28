angular.module("angDemo")
    .constant("dataUrl", "angDemo.json")
    .controller("angDemoCtrl", function ($scope, $http, dataUrl) {

    $scope.data = {};

    $http.get(dataUrl)
        .success(function (data) {
            $scope.data.categories = data;
        })
        .error(function (error){
            $scope.data.error = error;
        })
});
