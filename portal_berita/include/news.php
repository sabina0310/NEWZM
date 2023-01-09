
  <main id="main">
    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-12" data-aos="fade-up">
            <h3 class="category-title">NEWS</h3>
            <?php 
            $batas = 15;
            $sql_jum = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`,`u`.`foto`,`p`.`headline`
                    FROM `post` `p` JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                    WHERE `p`.`status` = 'Publish' ";
            $sql_jum .= " order by `p`.`date` ";
            
            //echo $sql_jum;
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
        $sql = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`,`u`.`foto`,`p`.`headline`
                    FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    INNER JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                    WHERE `p`.`status` = 'Publish'";
                $sql .= " order by `p`.`date` desc limit $posisi, $batas ";
        
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
                <p><b><a href="index.php">Newzm. </a></b><?php echo $headline;?></p>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="admin/foto/<?php echo $foto;?>" alt="" class="img-fluid" width="200px;" height="200px;"></div>
                  <div class="name">
                    <h3 class="m-0 p-0"><?php echo $nama;?></h3>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
            
            <div class="text-start py-4">
              <div class="custom-pagination">
              <?php 
                          
                          if($jum_halaman==0){
                            //tidak ada halaman
                          }else if($jum_halaman==1){
                            // echo "<a class='page-link active'>1</a>";
                          }else{
                              $sebelum = $halaman-1;
                              $setelah = $halaman+1;
                              if($halaman!=1){
                                echo "<a class='page-link prev'
                                href='index.php?include=news&halaman=1'>First</a>";
                                echo "<a class='page-link prev'
                                href='index.php?include=news&halaman=$sebelum'>«</a>";
                              }
                              for($i=1; $i<=$jum_halaman; $i++){
                                if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                                  if($i!=$halaman){
                                    echo "<a class='page-link' 
                                    href='index.php?include=news&halaman=$i'>$i</a>";
                                  }else{
                                    echo "<a class='page-link active' >$i</a>";
                                  }
                                }
                              }
                              if($halaman!=$jum_halaman){
                                echo "<a class='page-link next'
                                href='index.php?include=news&halaman=$setelah'>»</a>";
                                echo "<a class='page-link next' 
                                href='index.php?include=news&halaman=$jum_halaman'>Last</a>";
                              }
                  
                  }?>
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
