	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
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
                        </ul>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.php">
                    	<img src="assets/images/AKJ2.png" alt="AKJ'S SHOP" title="AKJ'S SHOP" style="width:110px; height:45px;" />
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
                        <li class="lvl1 parent megamenu"><a href="index.php">ACCUEIL <i class="anm anm-angle-down-l"></i></a> </li>
                        <li class="lvl1 parent dropdown"><a href="#">BEAUTE<i class="anm anm-angle-down-l"></i></a>
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
                        <li class="lvl1 parent dropdown"><a href="#">SOINS<i class="anm anm-angle-down-l"></i></a>
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
                        <li class="lvl1 parent dropdown"><a href="#">PAGNES<i class="anm anm-angle-down-l"></i></a>
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
                         <li class="lvl1 parent dropdown"><a href="#">A propos<i class="anm anm-angle-down-l"></i></a></li>
                          <li class="lvl1 parent dropdown"><a href="#">Actualite<i class="anm anm-angle-down-l"></i></a></li>
                           <li class="lvl1 parent dropdown"><a href="contact-us.php">Contact<i class="anm anm-angle-down-l"></i></a></li>
                        
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.php">
                            <img src="assets/images/AKJ2.png" alt="AKJ'S SHOP" title="AKJ'S SHOP" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                
                	<div class="site-cart">
                    	<a href="cart-variant.php" title="Cart">
                      
                        	<i class="fa fa-shopping-cart" style="font-size:24px"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"></span>
                        </a>
                        <!--Minicart Popup
                        <div id="header-cart" class="block block-cart">
                            <ul class="mini-products-list">
                                <li class="item">
                                    <a class="product-image" href="#">
                                        <img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                    </a>
                                    <div class="product-details">
                                        <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">$59.00</span>
                                            </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <a class="product-image" href="#">
                                        <img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                    </a>
                                    <div class="product-details">
                                        <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                        <div class="variant-cart">Gray / XXL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">$99.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                                <div class="total-in">
                                    <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        End Minicart Popup-->
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
                            <li><a href="maquillage.php" class="site-nav">Maquillage</a></li>
                            <li><a href="onglerie.php" class="site-nav">Onglerie</a></li>
                            <li><a href="esthetique.php" class="site-nav">Esthetique</a></li>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Produits de soin<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                            <li><a href="blog-left-sidebar.html" class="site-nav">Visage</a></li>
                            <li><a href="blog-right-sidebar.html" class="site-nav">Corps</a></li>
                            <li><a href="blog-fullwidth.html" class="site-nav">Parfum</a></li>
                            <li><a href="blog-grid-view.html" class="site-nav">Cheveux</a></li>
                          </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Pagne<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                            <li><a href="blog-article.html" class="site-nav">Vêtement</a></li>
                            <li><a href="blog-left-sidebar.html" class="site-nav">Sacs</a></li>
                            <li><a href="blog-right-sidebar.html" class="site-nav">Pochettes</a></li>
                            <li><a href="blog-fullwidth.html" class="site-nav">Evantails</a></li>
                            <li><a href="blog-grid-view.html" class="site-nav">Accessoires</a></li>
                            <li><a href="blog-article.html" class="site-nav">Chaussures</a></li>
                          </ul>
                        </li>
      </ul>
	</div>
	<!--End Mobile Menu-->