app.controller("FirstController", function ($scope) {
    $scope.display = function () {
        $scope.namev = $scope.name;
        $scope.name = "";
    };
});
