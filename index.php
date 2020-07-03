<!doctype html>
<html ng-app="myApp">
<head>
    <title>Main Page </title>

<!-- for adding angular js -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<!-- for adding angular router -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

</head>
<body > 
<div ng-view></div>


<script src="app/route.js"></script>
<script src="app/controller/postController.js"></script>
<!-- <script src="app/controllers/postControl.js"></script> -->
</body>
</html>