<?php include('koneksi/koneksi.php');?>
<?php 
if(isset($_GET['data'])) {
  $id_post = $_GET['data'];

if(isset($_POST['submit']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $id_post = $_GET['data'];
    $comment = $_POST['comment'];
    $status = 'Unapproved';


        if(empty($nama)){
          echo "<script>alert('Something went wrong. Please try again.');</script>";
        }else if(empty($email)){
          echo "<script>alert('Something went wrong. Please try again.');</script>";
        }else if(empty($id_post)){
          echo "<script>alert('Something went wrong. Please try again.');</script>";
        }else if(empty($comment)){
          echo "<script>alert('Something went wrong. Please try again.');</script>";
        }else if(empty($status)){
          echo "<script>alert('Something went wrong. Please try again.');</script>";
        }else{
	$sql = "INSERT INTO `comment` (`nama`, `email`, `comment`, `id_post`, `status`) VALUES
  ('$nama', '$email', '$comment', '$id_post', '$status')";
	mysqli_query($koneksi,$sql);


echo "<script>alert('Comment successfully submit. Comment will be display after admin review ');</script>";
}
}



?>

  <main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <?php
            
                    // menampilkan post
          $sql = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`,`u`.`foto`,`p`.`id_kategori`
                    FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    INNER JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                    WHERE `p`.`id_post` = '$id_post'";

          $query = mysqli_query($koneksi, $sql);
                          
          while($data = mysqli_fetch_row($query)){
              $id_post = $data[0];
              $judul = $data[1];
              $nama_kategori = $data[2];
              $nama = $data[3];
              $isi = $data[4];
              $image = $data[5];
              $date = $data[6];
              $status = $data[7];
              $trending = $data[8];
              $foto = $data[9];
              $id_kategori = $data[10];
          ?>
            <div class="single-post">
              <div class="post-meta"><span class="date"><?php echo $nama_kategori;?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date;?></span></div>
              <h1 class="mb-5"><?php echo $judul;?></h1>
              <figure class="col-lg-5 text-center my-4">
                <img src="admin/cover/<?php echo $image;?>" alt="Image Post" class="img-fluid" style="width: 600px; height: 300px;">
                <!-- <figcaption>Bumi Perkemahan Bedengan</figcaption> -->
              </figure>
              <p><span class="firstcharacter">N</span> <?php echo $isi;?></p>
            </div>
            <?php }?>
            <!-- End Single Post Content -->
                        <!-- ======= Comments Form ======= -->
                        <div class="row justify-content-center mt-5">

                          <div class="col-lg-12">
                            <h5 class="comment-title">Leave a Comment</h5>
                            <div class="row">
                              <div class="col-lg-6 mb-3">
                              <form method="post">
                                <label for="comment-name">Name</label>
                                <input type="text" class="form-control" id="comment-name" name="nama" placeholder="Enter your name" required>
                              </div>
                              <div class="col-lg-6 mb-3">
                                <label for="comment-email">Email</label>
                                <input type="text" class="form-control" id="comment-email" name="email" placeholder="Enter your email" required>
                              </div>
                              <div class="col-12 mb-3">
                                <label for="comment-message">Comment</label>
                                <textarea class="form-control" id="comment-message" name="comment" placeholder="Enter your message" cols="30" rows="5" required></textarea>
                              </div>
                              <div class="col-12">
                                <input type="submit" name="submit" class="btn btn-primary">
                              </div>
                            </form>
                            </div>
                          </div>
                        </div><!-- End Comments Form -->
          </div>

          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">BERITA TERKAIT</button>
                </li>
                
              </ul>
 

                <!-- Related --> 
                <?php
                    // menampilkan post
          $sql = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`,`u`.`foto`,`p`.`headline`
                    FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    INNER JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                    WHERE `p`.`id_kategori` = '$id_kategori'";

          $query = mysqli_query($koneksi, $sql);
                          
          while($data = mysqli_fetch_row($query)){
              $id_post = $data[0];
              $judul = $data[1];
              $nama_kategori = $data[2];
              $nama = $data[3];
              $isi = $data[4];
              $image = $data[5];
              $date = $data[6];
              $status = $data[7];
              $trending = $data[8];
              $foto = $data[9];
              $headline = $data[10];
          ?>
                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date"><?php echo $nama_kategori;?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date;?></span></div>
                  <h2 class="mb-2"><a href="index.php?include=detail-post&data=<?php echo $id_post;?>"><?php echo $judul;?></a></h2>
                  <span class="author mb-3 d-block"><?php echo $nama;?></span>
              </div>
                <?php }?>  
                <!-- End Popular -->
            <!-- ======= Comments ======= -->
            
            <div class="comments">
            <h5 class="comment-title py-4">COMMENTS</h5>
                  
                <?php
                if(isset($_GET['data'])) {
                  $id_post = $_GET['data'];
                // menampilkan data comment
                    $sql_p = "SELECT `c`.`id_comment`, `c`.`nama`, `c`.`email`, `c`.`comment`, `c`.`id_post`, `c`.`status`
                    from `comment` `c` INNER JOIN `post` `p` ON `c`.`id_post` = `p`.`id_post` where `c`.`id_post` = '$id_post' and `c`.`status` = 'Approved'";
                    
                    $query_p = mysqli_query($koneksi,$sql_p);
                   
                    
                  while($data_k = mysqli_fetch_row($query_p)){
                    $id_comment = $data_k[0];
                    $nama = $data_k[1];
                    $email = $data_k[2];
                    $comment = $data_k[3];
                    $id_post = $data_k[4];
                    $status = $data_k[5];

                  ?>
                <div class="comment d-flex mb-4">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm rounded-circle">
                    <img class="avatar-img" src="assets/img/user.png" alt="" class="img-fluid">
                
                    </div>
              </div>
                    <div class="flex-grow-1 ms-2 ms-sm-3">
                  <div class="comment-meta d-flex align-items-baseline">
                    <h6 class="me-2"><?php echo $nama;?></h6>
                    <!-- <span class="text-muted">2d</span> -->
                  </div>
                  <div class="comment-body">
                  <?php echo $comment;?>
                    </div>
              </div>
              </div>
            </div>
            <?php }}?>
            <!-- End Comments -->
            </div>
            </div>
        </div>
        </section>
        
    </main> 
    <?php }?>
    <!-- End #main -->

