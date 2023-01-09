<?php 
if(isset($_GET['id_kategori'])){
  $id_kategori = $_GET['id_kategori'];
  ?>
<main id="main">
    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-12" data-aos="fade-up">
            <?php
            //if(isset($_GET['id_kategori'])){
              //$id_kategori = $_GET['id_kategori'];
              $query=mysqli_query($koneksi,"SELECT id_kategori,nama_kategori from kategori where id_kategori = '$id_kategori'");
                while($row=mysqli_fetch_array($query))
                {
            ?>
            <h3 class="category-title"><?php echo htmlentities($row['nama_kategori']);?> NEWS</h3>
            <?php }
          //} ?>
            
            <?php 
            $batas = 2;
            if(isset($_GET['id_kategori'])){
              $id_kategori = $_GET['id_kategori'];
            $sql_jum = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`,`u`.`foto`,`p`.`headline`
                    FROM `post` `p` JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                    WHERE `p`.`id_kategori` = '$id_kategori' and `p`.`status` = 'Publish'";
            $sql_jum .= " order by `p`.`date`";
            $query_jum = mysqli_query($koneksi,$sql_jum);
            $jum_data = mysqli_num_rows($query_jum);
            $jum_halaman = ceil($jum_data/$batas);
          
            if(!isset($_GET['halaman'])){
              $posisi = 0;
              $halaman = 1;
              
            }else{
              $halaman = $_GET['halaman'];
              $posisi = ($halaman-1) * $batas;
            }
          
        // menampilkan post
        if(isset($_GET['id_kategori'])){
        $id_kategori = $_GET['id_kategori'];
        $sql = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`,`u`.`foto`,`p`.`headline`
                    FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    INNER JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                    WHERE `p`.`id_kategori` = '$id_kategori' and `p`.`status` = 'Publish' order by `p`.`date` desc limit $posisi, $batas";
                //echo $sql;
                /* $query = mysqli_query($koneksi, $sql);
                $rowcount=mysqli_num_rows($sql);
                if($rowcount==0)
                {
                echo "No record found";
                }
                else { */
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
            <div class="d-md-flex post-entry-2 half">
              <a href="index.php?include=detail-post&data=<?php echo $id_post;?>" class="me-4 thumbnail">
                <img src="admin/cover/<?php echo $image;?>" alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date"><?php echo $nama_kategori;?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date;?></span></div>
                <h3><a href="index.php?include=detail-post&data=<?php echo $id_post;?>"><?php echo $judul;?></a></h3>
                <p><b><a href="index.php?include=index">Newzm. </a></b><?php echo $headline;?></p>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="admin/foto/<?php echo $foto;?>" alt="" class="img-fluid" width="200px;" height="200px;"></div>
                  <div class="name">
                    <h3 class="m-0 p-0"><?php echo $nama;?></h3>
                  </div>
                </div>
              </div>
            </div>
            <?php }}?>
            
            <div class="text-start py-4">
              <div class="custom-pagination">
              <?php 
              /* echo '---------'.$id_kategori; */
                          
                          if($jum_halaman==0){
                            //tidak ada halaman
                          }else if($jum_halaman==1){
                            echo "<a class='page-link active'>1</a>";
                          }else{
                              $sebelum = $halaman-1;
                              $setelah = $halaman+1;
                              if($halaman!=1){
                                ?>
                                <a class='page-link prev'
                                href='index.php?include=category&id_kategori=<?php echo $id_kategori; ?>&halaman=1'>First</a>
                                <a class='page-link prev'
                                href='index.php?include=category&id_kategori=<?php echo $id_kategori; ?>&halaman=<?php echo $sebelum;?>'>«</a>
                                <?php }
                              for($i=1; $i<=$jum_halaman; $i++){
                                if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                                  if($i!=$halaman){
                                    ?>
                                    <a class='page-link' 
                                    href='index.php?include=category&id_kategori=<?php echo $id_kategori; ?>&halaman=<?php echo $i;?>'><?php echo $i;?></a>
                                  <?php 
                                  }else{
                                    echo "<a class='page-link active' >$i</a>";
                                  }
                                }
                              }
                              if($halaman!=$jum_halaman){                                    
                                ?>
                                <a class='page-link next'
                                href='index.php?include=category&id_kategori=<?php echo $id_kategori; ?>&halaman=<?php echo $setelah;?>'>»</a>
                                <a class='page-link next' 
                                href='index.php?include=category&id_kategori=<?php echo $id_kategori; ?>&halaman=<?php echo $jum_halaman;?>'>Last</a>
                                <?php }
                  
                  }}?>
              </div>
            </div>
          </div>


            <!-- ======= Sidebar ======= 
            <div class="aside-block"> -->
              </ul>
              <div class="tab-content" id="pills-tabContent">
              </ul>
            </div>
            <!-- End Tags -->
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <?php }?>