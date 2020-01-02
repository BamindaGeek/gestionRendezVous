<!DOCTYPE html>
<html lang="fr" ng-app="mainTelya">

<!-- Mirrored from www.bootstrapdash.com/demo/star-admin-pro/src/demo_3/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2019 23:42:00 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syabe-Planer : <?php echo $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>vendors/select2/select2.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- Plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>css/demo_3/style.css">
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>css/toastr.css">
    <?php if($menu ==13){ ?>
    <link rel="stylesheet" href="<?php echo $myConstante::$src;?>css/style.css">
    <?php } ?>
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?php echo $myConstante::$img;?>favicon.png" />
    <!--   Core JS Files   -->
    <!--<script src="<?php /*echo $myConstante::$src;*/?>vendors/angular/angular.min.js"></script>-->
    <script src="<?php echo $myConstante::$src;?>vendors/angular/angular.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>-->
</head>
<body class="dark-theme" ng-controller ="controlerTelya">
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php $menu !=1 ? include 'nav.php' :''; ?>
            <div class="container-fluid page-body-wrapper">
                <?php $menu !=1 ? include 'navright.php' :''; ?>
