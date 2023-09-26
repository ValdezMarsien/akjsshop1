
<?php
session_start();
@include 'bd.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/404.html   11 Nov 2019 12:45:12 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>404 Page Not Found &ndash; Akj's Shop</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/AKJ2.png" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/css/plugins.css">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="page-template lookbook-template error-page belle">
<div class="pageWrapper">
  <?php include 'header.php' ?>
    
    <!--Body Content-->
    <div id="page-content">        
        <!-- Lookbook Start -->
        <div class="container">
        	<div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12">	
        			<div class="empty-page-content text-center">
                        <h1>404 Page non trouve</h1>
                        <p>Cette page n'exixte pas ou en cours de maintenance</p>
                        <p><a href="index.php" class="btn btn--has-icon-after">RETOUR A LA PAGE D'ACCUEIL <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                      </div>
        		</div>
        	</div>
        </div>
        <!-- Lookbook Start -->
    </div>
    <!--End Body Content-->
    
    <!--Footer-->
    <?php include 'footer.php' ?>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <script src="assets/js/vendor/masonry.js" type="text/javascript"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- belle/404.html   11 Nov 2019 12:45:12 GMT -->
</html>