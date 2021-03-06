<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<html lang="en" ng-app="almunApp">
<head>
    <meta charset="UTF-8">
    <title>Al Munaworoh</title>
    <link rel="stylesheet" href="./libs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./libs/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="./css/AdminLTE.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/skins/skin-green.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/ft/font-awesome.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./js/datepicker/bootstrap-datepicker3.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./js/timepicker/bootstrap-timepicker.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/jquery.datetimepicker.css" type="text/css" media="screen" title="no title" charset="utf-8">

    <script src="./js/jQuery/jQuery.js"></script>
    <script src="./libs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="./js/datepicker/bootstrap-datepicker.js"></script>
    <script src="./js/timepicker/bootstrap-timepicker.js"></script>
    <script src="./js/moment.js"></script>
    <script src="./js/moment/locale.js"></script>
    <script src="./js/jquery.datetimepicker.js"></script>

    <style>
        .main-sidebar{
            height:720px;
        }
    </style>
</head>
<body class="skin-green sidebar-mini">
    <div header></div> 
    <div ng-view class="body"></div>
    <script src="./libs/angular/angular.js"></script>
    <script src="./libs/angular-route/angular-route.js"></script>
    <script src="./libs/angular-resource/angular-resource.js"></script>
    <script src="./libs/ng-file-upload-all.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="./libs/angular-youtube-embed.min.js"></script>
    <script src="./libs/angular-google-maps.min.js"></script>
    <script src="./libs/lodash.min.js"></script>
    <script src="./app/app.js"></script>
    <script src="./app/factory/Content.js"></script>
    <script src="./app/controllers/content.js"></script>
    <script src="./app/controllers/kategori.js"></script>
    <script src="./app/controllers/jadwal.js"></script>
    <script src="./app/controllers/event.js"></script>
<script src='http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false&language=en&v=3.20'></script>


  
</body>
</html>
