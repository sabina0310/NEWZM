<main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
              <?php

                $sql = "SELECT `p`.`id_post`, `p`.`judul`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`,`p`.`headline`
                FROM `post` `p`
                WHERE `p`.`trending` = 'Yes' and `p`.`status` = 'Publish' order by `p`.`date` desc limit 3";

                $query = mysqli_query($koneksi, $sql);
                                
                while($data = mysqli_fetch_row($query)){
                    $id_post = $data[0];
                    $judul = $data[1];
                    $image = $data[2];
                    $date = $data[3];
                    $status = $data[4];
                    $trending = $data[5];
                    $headline = $data[6];
                ?>
                

                <div class="swiper-slide">
                  <a href="index.php?include=detail-post&data=<?php echo $id_post;?>" class="img-bg d-flex align-items-end" style="background-image: url('admin/cover/<?php echo $image;?>');">
                    <div class="img-bg-inner">
                      <h2><?php echo $judul;?></h2>
                      <p><b>Newzm.</b><?php echo $headline;?></p>
                    </div>
                  </a>
                </div>
                <?php }?>

              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <!-- <div class="row g-5"> -->
          <!-- <div class="col-md-12"> -->
            <div class="row">
              
              <?php
                $sql_k = "SELECT `id_kategori`,`nama_kategori` 
                FROM `kategori`";

                $query_k = mysqli_query($koneksi,$sql_k);
                while($data_k = mysqli_fetch_row($query_k)){
                  $id_kategori = $data_k[0];
                  $kategori = $data_k[1];

                $sql = "SELECT `p`.`id_post`, `p`.`judul`, `p`.`image`, `p`.`date`, `p`.`status`, `k`.`nama_kategori`
                FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                WHERE `k`.`nama_kategori` = '$kategori' and `p`.`status` = 'Publish' order by `p`.`date` desc limit 1" ;

                $query = mysqli_query($koneksi, $sql);
                                
                while($data = mysqli_fetch_row($query)){
                    $id_post = $data[0];
                    $judul = $data[1];
                    $image = $data[2];
                    $date = $data[3];
                    $status = $data[4];
                    $nama_kategori = $data[5];
                ?>
                <div class="col-md-6">
                <div class="post-entry-1">
                  <a href="index.php?include=detail-post&data=<?php echo $id_post;?>"><img src="admin/cover/<?php echo $image;?>" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date"><?php echo $nama_kategori;?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date;?></span></div>
                  <h2><a href="index.php?include=detail-post&data=<?php echo $id_post;?>"><?php echo $judul;?></a></h2>
                </div>
                </div>
                <?php }}?>
                </div>
                </div>
                </section>
              
  </main>
  <!-- End #main -->