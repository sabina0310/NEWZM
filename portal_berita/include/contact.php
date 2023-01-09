<main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Contact us</h1>
          </div>
        </div>

        <div class="row gy-4">
        <?php 
$hlm='contact';
$query=mysqli_query($koneksi,"SELECT `address`, `phone`, `email` from contact where hlm='$hlm'");
while($row=mysqli_fetch_array($query))
{
  ?>
          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address><?php echo htmlentities($row['address'])?></address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:<?php echo htmlentities($row['phone'])?>"><?php echo htmlentities($row['phone'])?></a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:<?php echo htmlentities($row['email'])?>"><?php echo htmlentities($row['email'])?></a></p>
            </div>
            <?php } ?>
          </div><!-- End Info Item -->

        </div>
        <?php include('message.php');?>

<!-- End Contact Form -->

      </div>
    </section>

  </main><!-- End #main -->
