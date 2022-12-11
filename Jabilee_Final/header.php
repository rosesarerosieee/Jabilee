<header class="header">

   <div class="flex">

      <a href="https://www.facebook.com/profile.php?id=100086736890869" class="logo">JABILEE</a>

      <nav class="navbar">
         <a href="page.html">Home</a>
		 <a href="admin.php">Admin</a>
         <a href="products.php">Menu</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>