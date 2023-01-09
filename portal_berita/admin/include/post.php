<?php 
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_post = $_GET['data'];
      //hapus post
      $sql_dh = "delete from `post` 
      where `id_post` = '$id_post'";
      mysqli_query($koneksi,$sql_dh);
    }
  }

  if(isset($_POST['katakunci'])){
    $katakunci = $_POST['katakunci'];
    $_SESSION['katakunci'] = $katakunci;
  }
  if(isset($_SESSION['katakunci'])){
    $katakunci = $_SESSION['katakunci'];
  }
?>

<!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-newspaper"></i> Post</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Post</h3>
                <div class="card-tools">
                <a href="index.php?include=tambah-post" 
                  class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Post</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=post">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                <?php if($_GET['notif']=="tambahberhasil"){?>
                <div class="alert alert-success" role="alert">
                Data Berhasil Ditambahkan</div>
                <?php } else if($_GET['notif']=="editberhasil"){?>
                <div class="alert alert-success" role="alert">
                Data Berhasil Diubah</div>
                <?php } else if($_GET['notif']=="hapusberhasil"){?>
                <div class="alert alert-success" role="alert">
                Data Berhasil Dihapus</div>
                <?php }?>
                <?php }?>
                </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th width="5%">No</th>
                      <th width="20%">Judul</th>
                      <th width="10%">Kategori</th>
                      <th width="10%">Author</th>
                      <th width="10%">Tanggal</th>
                      <th width="5%">Trending</th>
                      <th width="5%">Status</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                $batas = 10;
                
                if ($_SESSION['level'] == 'Author'){
                  $id_user = $_SESSION['id_user'];
              //hitung jumlah semua data
                  $sql_jum = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`
                  from `post` `p` JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                  JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                  WHERE `p`.`id_author` = '$id_user'";
                  if (!empty($katakunci)){
                    $sql_jum .= " where `p`.`judul` LIKE '%$katakunci%'";
                  }
                  $sql_jum .= " order by `k`.`nama_kategori`,`p`.`judul`";
                  $query_jum = mysqli_query($koneksi,$sql_jum);
                  $jum_data = mysqli_num_rows($query_jum);
                  $jum_halaman = ceil($jum_data/$batas);

                }else if($_SESSION['level'] == 'Admin'){
                  $sql_jum = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`
                  from `post` `p` JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                  JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`";
                  if (!empty($katakunci)){
                    $sql_jum .= " where `p`.`judul` LIKE '%$katakunci%'";
                  }
                  $sql_jum .= " order by `k`.`nama_kategori`,`p`.`judul`";
                  $query_jum = mysqli_query($koneksi,$sql_jum);
                  $jum_data = mysqli_num_rows($query_jum);
                  $jum_halaman = ceil($jum_data/$batas);
                  }
                  if(!isset($_GET['halaman'])){
                    $posisi = 0;
                    $halaman = 1;
                  }else{
                    $halaman = $_GET['halaman'];
                    $posisi = ($halaman-1) * $batas;
                  }
                
                    // menampilkan data POST
                    if ($_SESSION['level'] == 'Author'){
                    $id_user = $_SESSION['id_user'];
                  
                    $sql_p = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`trending`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`headline`
                    FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    INNER JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`
                    WHERE `p`.`id_author` = '$id_user'";
                    if (!empty($katakunci)){
                      $sql_p .= " and `p`.`judul` LIKE '%$katakunci%'";
                      }
                      $sql_p .= " ORDER BY `k`.`nama_kategori`,`p`.`judul` limit $posisi, $batas ";
                    
                    
                  }
                    else if($_SESSION['level'] == 'Admin'){
                    $sql_p = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`trending`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`headline` 
                    FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    INNER JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user`";
                    
                    if (!empty($katakunci)){
                    $sql_p .= " where `p`.`judul` LIKE '%$katakunci%'";
                    }
                    $sql_p .= " ORDER BY `k`.`nama_kategori`,`p`.`judul` limit $posisi, $batas ";
                    
                    
                }
                    $query_p = mysqli_query($koneksi,$sql_p);
                    $posisi+1;
                    
                  while($data_k = mysqli_fetch_row($query_p)){
                    $id_post = $data_k[0];
                    $judul = $data_k[1];
                    $nama_kategori = $data_k[2];
                    $nama = $data_k[3];
                    $isi = $data_k[4];
                    $trending = $data_k[5];
                    $image = $data_k[6];
                    $date = $data_k[7];
                    $status = $data_k[8];
                    $headline = $data_k[9];

                  ?>
                    <tr>
                      <td><?php echo $posisi+1;?></td>
                      <td><?php echo $judul;?></td>
                      <td><?php echo $nama_kategori;?></td>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $date;?></td>
                      <td><?php echo $trending;?></td>
                      <td><?php echo $status;?></td>
                      <td align="center">
                        <a href="index.php?include=edit-post&data=<?php echo $id_post;?>" 
                        class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                        <a href="index.php?include=detail-post&data=<?php echo $id_post;?>" 
                        class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $id_post; ?>?')) 
                          window.location.href ='index.php?include=post&aksi=hapus&data=<?php echo 
                          $id_post;?>&notif=hapusberhasil'"
                          class="btn btn-xs btn-warning"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $posisi++;}?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">

              <ul class="pagination pagination-sm m-0 float-right">
              <?php 
              if($jum_halaman==0){
                //tidak ada halaman
              }else if($jum_halaman==1){
                  echo "<li class='page-item'><a class='page-link'>1</a></li>";
              }else{
                  $sebelum = $halaman-1;
                  $setelah = $halaman+1;
                  if($halaman!=1){
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=post&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=post&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                    if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                      if($i!=$halaman){
                          echo "<li class='page-item'><a class='page-link' 
                          href='index.php?include=post&halaman=$i'>$i</a></li>";
                      }else{
                          echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                      }
                    }
                  }
                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=post&halaman=$setelah'>»</a></li>";
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=post&halaman=$jum_halaman'>Last</a></li>";
                  }
                  
                    }?>
                    </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->