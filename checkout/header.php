<header class="header" style="background-color: #21af4b">

   <div class="flex">

      <a href="../index.php" class="logo">AKJ'S SHOP</a>

      <!--<nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
      </nav>-->

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="../cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>