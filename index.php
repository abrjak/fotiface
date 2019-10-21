<?php
    session_start();
?>

<!DOCTYPE html>

<html ng-app="fotiface" lang="de">

<head>
    <meta charset="utf-8">
    <title>fotiface</title>

    <!-- Einbindung CDN Bootstrap & AngularJS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.js"></script>

    <script src="app/app.js"></script>

</head>

<body>

    <div ng-view class="container-fluid"></div>

</body>

</html>