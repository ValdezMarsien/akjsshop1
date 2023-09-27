    <!--Top Header-->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +236 70 11 00 80</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> </p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                    <?php if(empty($_SESSION['email'])) { ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Create Account</a></li>
                        <li><a href=""></a></li>
                    </ul>
                    <?php } else {  ?>
                      <div class="language-dropdown">
                        <span class="language-dd">Bienvenu(e), <?=$_SESSION['email']; ?></span>
                        <ul id="language">
                            <a href=""><li class="">Modifier votre compte</li></a> 
                            <a href="logout.php"><li class="">Se deconnecter</li></a> 
                            <?php if($_SESSION['role'] == 'administrateur') { ?>
                              <a href="dashboard/index.php"><li class="">Ma boutique</li></a> 
                            <?php } ?>
                        </ul>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.php">
                    	<img src="assets/images/AKJ2.png" alt="Akj's Shop" title="Akj's Shop" style="width:110px; height:45px;" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="index.php">Accueil<i class="anm anm-angle-down-l"></i></a>

                            </li>


                        <!--<li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          	<li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                                    <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                                 </ul>
                            </li>
                            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                                    <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                                 </ul>
                            </li>
							<li><a href="checkout.html" class="site-nav">Checkout</a></li>
                            <li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
                            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                            <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-angle-right-l"></i></a>
                              <ul>
                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                <li><a href="lookbook2.html" class="site-nav">Style 2</a></li>
                              </ul>
                            </li>
                            <li><a href="404.html" class="site-nav">404</a></li>
                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label1">New</span> </a></li>
                          </ul>
                        </li>-->
                        <li class="lvl1 parent dropdown"><a href="#">Beauté<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          <?php
                                $sql="SELECT * FROM `countries`where continent_id= '1' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            <li><a href="categories.php?id_c=<?php echo $row['id_c']?>" class="site-nav"><?php echo $row['country'] ?></a></li>
                        <?php } ?>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Soins<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          <?php
                                $sql="SELECT * FROM `countries`where continent_id= '2' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            <li><a href="categories.php?id_c=<?php echo $row['id_c']?>" class="site-nav"><?php echo $row['country'] ?></a></li>
                        <?php } ?>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Pagnes<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          <?php
                                $sql="SELECT * FROM `countries`where continent_id= '3' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            <li><a href="categories.php?id_c=<?php echo $row['id_c']?>" class="site-nav"><?php echo $row['country'] ?></a></li>
                        <?php } ?>
                          </ul>
                        </li>
                         <li class="lvl1 parent dropdown"><a href="404.php">A propos<i class="anm anm-angle-down-l"></i></a></li>
                          <li class="lvl1 parent dropdown"><a href="404.php">Actualite<i class="anm anm-angle-down-l"></i></a></li>
                           <li class="lvl1 parent dropdown"><a href="contact-us.php">Contact<i class="anm anm-angle-down-l"></i></a></li>
                        
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.php">
                            <img src="assets/images/AKJ2.png" alt="AKJ'S SHOP" title="AKJ'S SHOP" style="width:110px; height:45px;" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="cart-variant.php" class="site-header__cart" title="Cart">
                               <?php                                  
                                    $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                                    $row_count = mysqli_num_rows($select_rows);
                                ?>
                        	<i class="fa fa-shopping-cart" style="font-size:24px"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php echo $row_count; ?></span>
                        </a>
                        <!--Minicart Popup-->
                        <!--EndMinicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent dropdown"><a href="#">Produits de beauté<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          <?php
                                $sql="SELECT * FROM `countries`where continent_id= '1' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            <li><a href="categories.php?id_c=<?php echo $row['id_c']?>" class="site-nav"><?php echo $row['country'] ?></a></li>
                           <?php } ?> 
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Produits de soin<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          <?php
                                $sql="SELECT * FROM `countries`where continent_id= '2' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            <li><a href="categories.php?id_c=<?php echo $row['id_c']?>" class="site-nav"><?php echo $row['country'] ?></a></li>
                           <?php } ?>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Pagne<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                          <?php
                                $sql="SELECT * FROM `countries`where continent_id= '3' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 
                            <li><a href="categories.php?id_c=<?php echo $row['id_c']?>" class="site-nav"><?php echo $row['country'] ?></a></li>
                           <?php } ?>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="404.php">A propos<i class="anm anm-angle-down-l"></i></a></li>
                          <li class="lvl1 parent dropdown"><a href="404.php">Actualite<i class="anm anm-angle-down-l"></i></a></li>
                           <li class="lvl1 parent dropdown"><a href="contact-us.php">Contact<i class="anm anm-angle-down-l"></i></a></li>
      </ul>
	</div>
	<!--End Mobile Menu-->