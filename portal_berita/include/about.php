<main id="main">
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">About Us</h1>
          </div>
        </div>

        <div class="row mb-5">

          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src="assets/img/logo.png" alt="" class="img-fluid">
            </a>
            <?php 
$hlm='aboutus';
$query=mysqli_query($koneksi,"SELECT `judul`, `deskripsi` from about_us where hlm='$hlm'");
while($row=mysqli_fetch_array($query))
{

?>
            <div class="ps-md-5 mt-4 mt-md-0">
              <div class="post-meta mt-4"><?php echo htmlentities($row['judul'])?></div>
              <!-- <h2 class="mb-4 display-4">Company History</h2> -->

              <p><?php echo $row['deskripsi'];?></p>
              <?php } ?>
            </div>
          </div>

        </div>

      </div>
      
    </section>

<br><br>
    <section>

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h2 class="display-4">Our Team</h2>
                </div>
            </div>
          </div>
          <?php 
        //get profil
        $sql = "SELECT `nama`, `email`,`foto`, `level`, `username` FROM `user` where `level` = 'Admin' order by `nama` asc";
        //echo $sql;
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_row($query)){
          $nama = $data[0];
          $email = $data[1];
          $foto = $data[2];
          $level = $data[3];
          $username = $data[4];
?>
          <div class="col-lg-6 text-center mb-5">
            <img src="admin/foto/<?php echo $foto;?>" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4><?php echo $nama;?></h4>
            <span class="d-block mb-3 text-uppercase"><?php echo $level;?></span>
          </div>
          <?php }?>
        </div>
      </div>
      
    </section>

  </main><!-- End #main -->