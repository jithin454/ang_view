var app = angular.module("myApp", ["ngRoute"]);
app.config(function ($routeProvider) {
    $routeProvider

        .when("/home", {
            templateUrl: "templates/Home.html",
            controller: "FirstController",
        })

        .otherwise({ redirectTo: "/home" });
});
