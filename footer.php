    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <!--<ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>-->
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Produits de beaute</h4>
                            <ul>
                            <?php
                                $sql="SELECT * FROM `countries`where continent_id= '1' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            	<li><a href="categories.php?id_c=<?php echo $row['id_c']?>"><?php echo $row['country'] ?></a></li>
                            <?php } ?>    
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Produits de soins</h4>
                            <ul>
                            <?php
                                $sql="SELECT * FROM `countries`where continent_id= '2' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            	<li><a href="categories.php?id_c=<?php echo $row['id_c']?>"><?php echo $row['country'] ?></a></li>
                            <?php } ?> 
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Pagnes</h4>
                            <ul>
                            <?php
                                $sql="SELECT * FROM `countries`where continent_id= '3' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            	<li><a href="categories.php?id_c=<?php echo $row['id_c']?>"><?php echo $row['country'] ?></a></li>
                            <?php } ?> 
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p> République Centrafricaine - <br>Bangui </p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>+236 75 75 92 69</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>contact@akjsshop.cm</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
     
            </div>
        </div>
    </footer>
    <!--End Footer-->