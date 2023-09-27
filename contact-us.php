
<?php
  session_start();
  include 'bd.php';

  if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sujet = $_POST['sujet'];

    $sql ="INSERT INTO `contact`(`id`, `nom`, `email`, `telephone`, `sujet`, `message`) VALUES (NULL,'$nom','$email','$telephone','$sujet','$message')";

    $result = mysqli_query($conn, $sql);

    if($result){
      header("Location: contact-us.php?msg=Message Envoye ");
    }
    else {
      echo "Echoue " . mysqli_error($conn);
    }
  } 



?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Contact Us &ndash; Akj's Shop</title>
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
<body class="contact-template page-template belle">
<div class="pageWrapper">

<?php include 'header.php' ?>
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Contact Us</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        <div class="map-section map">
        	<iframe src="https://www.google.com/maps/embed?pb=" height="350" allowfullscreen></iframe>
            <div class="container">
            	<div class="row">
                	<div class="map-section__overlay-wrapper">
                        <div class="map-section__overlay">
                            <h3 class="h4">Our store</h3>
                            <div class="rte-setting">
                                <p>RCA<br>Bangui</p>
                                <p>Disponible 24h/24</p>
                                <p>+236 70 11 00 80</p>
                            </div>
                            <p><a href="https://maps.google.com/?daddr=80%20Spadina%20Ave,%20Toronto" class="btn btn--secondary btn--small" target="_blank">Get directions</a></p>
                        </div>
                   	</div>
                </div>
            </div>
        </div>
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="index.php" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Contact Us</span>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                	<h2>Nous contacter</h2>
                    <p>  </p>
                	<div class="formFeilds contact-form form-vertical">
                      <form action="" method="post" class="contact-form">	
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
                          	<input type="text" id="ContactFormName" name="nom" placeholder="Nom" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
							<input type="email" id="ContactFormEmail" name="email" placeholder="Adresse Email" required="">                        	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="tel" id="ContactFormPhone" name="telephone" pattern="[0-9\-]*" placeholder="Numero de telephone">
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="text" id="ContactSubject" name="sujet" placeholder="Sujet">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                            <textarea required="" rows="10" id="ContactFormMessage" name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <button type="submit" name="submit" class="btn"> Envoyer </button>
                        </div>
                     </div>
                     </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                	<div class="open-hours">
                    	<strong>Opening Hours</strong><br>
						24H/24<br>
						
                    </div>
                	<hr />
                    <ul class="addressFooter">
                        <li><i class="icon anm anm-map-marker-al"></i><p>A </p></li>
                        <li class="phone"><i class="icon anm anm-phone-s"></i><p>+236 70 11 00 80</p></li>
                        <li class="email"><i class="icon anm anm-envelope-l"></i><p> </p></li>
                    </ul>
                    <hr />
                    <ul class="list--inline site-footer__social-icons social-icons">
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
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
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->
</html>