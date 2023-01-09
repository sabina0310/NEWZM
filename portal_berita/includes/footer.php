<footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-md-10 center col-lg-4">
            <br><br><br><br>
            <img src="assets/img/logo.png" alt="Logo" style="height:80px;">
          </div>
          <div class="col-6 col-lg-2">
            <br> <br>
            <h3 class="footer-heading">Navigation</h3>
              <ul class="footer-links list-unstyled">
              <li><a href="index.php"> Home</a></li>
              <li><a href="index.php?include=news"> News</a></li>
              <li><a href="index.php?include=about"> About us</a></li>
              <li><a href="index.php?include=contact"> Contact</a></li>
            </ul>
          </div>

          <div class="col-6 col-lg-2">
            <br><br>
            <h3 class="footer-heading">News</h3>
            <ul class="footer-links list-unstyled">
            <?php 
                $query=mysqli_query($koneksi,"SELECT id_kategori,nama_kategori from kategori");
                while($row=mysqli_fetch_array($query))
                {
                ?>
              <li><a href="index.php?include=category&id_kategori=<?php echo htmlentities($row['id_kategori']);?>"><?php echo htmlentities($row['nama_kategori']);?></a></li>
              <?php } ?>
            </ul>
          </div>

          <div class="col-12 col-lg-4">
            <h3>Our Address</h3>
            <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.296422275668!2d112.59251549999996!3d-7.9682868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883ac224a2315%3A0x704b5ac0ee32deaa!2sFAKULTAS%20VOKASI%20UNIVERSITAS%20BRAWIJAYA!5e0!3m2!1sid!2sid!4v1669178196042!5m2!1sid!2sid" width="350" height="210" style="border:5px solid #333;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p>2HJV+M2J, Unnamed Road, Kunci, Kalisongo, Kec. Dau, Kabupaten Malang, Jawa Timur 65151</p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 ">
            <div class="copyright">
              © Copyright <strong><span>NEWZM</span></strong>. All Rights Reserved
            </div>
          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="https://www.twitter.com" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
<!--               <a href="https://www.skype.com" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="https://www.linkedin.com" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

