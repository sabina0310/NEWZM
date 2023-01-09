<?php include('koneksi/koneksi.php');?>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/Logo.png" alt="Logo">
        <!-- <h1>NEWZM</h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="index.php?include=news"><span>News</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>

              <li><a href="index.php?include=hotnews">Hot News</a></li>
              <?php 
                $query=mysqli_query($koneksi,"SELECT id_kategori,nama_kategori from kategori");
                while($row=mysqli_fetch_array($query))
                {
                ?>
              <li><a href="index.php?include=category&id_kategori=<?php echo htmlentities($row['id_kategori']);?>"><?php echo htmlentities($row['nama_kategori']);?></a></li>
<!--               <li><a href="search-result1.php">Economy</a></li>
              <li><a href="search-result2.php">Education</a></li>
              <li><a href="search-result3.php">Travel</a></li>
              <li><a href="search-result4.php">Culinary</a></li> -->
              <?php } ?>
            </ul>
          </li>
          
          <li><a href="index.php?include=about">About</a></li>
          <li><a href="index.php?include=contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
      

      <div class="position-relative">
        <a href="https://www.facebook.com" target="_blank" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="https://www.twitter.com" target="_blank" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="https://www.instagram.com" target="_blank" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="index.php?include=news" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form method="post" action="index.php?include=search-news" class="search-form">
          <button type="submit" class="icon bi-search" ></button>
            <input type="text" name="katakunci" id="kata_kunci" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header>