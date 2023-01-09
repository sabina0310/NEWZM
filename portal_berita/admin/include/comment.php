<?php 
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_comment = $_GET['data'];
      //hapus comment
      $sql_dh = "delete from `comment` 
      where `id_comment` = '$id_comment'";
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
            <h3><i class="fas fa-comments"></i> Comment</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Comment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar comment</h3>
                <!-- <div class="card-tools">
                <a href="index.php?include=tambah-comment" 
                  class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah comment</a>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=comment">
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
                      <th width="10%">Nama</th>
                      <th width="10%">Email</th>
                      <th width="15%">Judul Post</th>
                      <th width="10%">Status</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $batas = 2;
                  //hitung jumlah semua data
                  $sql_jum = "SELECT `c`.`id_comment`, `c`.`nama`, `c`.`email`, `c`.`comment`, `p`.`judul`
                  from `comment` `c` JOIN `post` `p` ON `c`.`id_post` = `p`.`id_post`";
                  if (!empty($katakunci)){
                    $sql_jum .= " where `c`.`nama` LIKE '%$katakunci%'";
                  }
                  $sql_jum .= " order by `c`.`nama`,`p`.`judul`";
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
                    // menampilkan data POST
                    $sql_p = "SELECT `c`.`id_comment`, `c`.`nama`, `c`.`email`, `c`.`comment`, `p`.`judul`, `c`.`status`
                    from `comment` `c` INNER JOIN `post` `p` ON `c`.`id_post` = `p`.`id_post`";
                    
                    if (!empty($katakunci)){
                    $sql_p .= " where `c`.`nama` LIKE '%$katakunci%'";
                    }
                    $sql_p .= " ORDER BY `c`.`nama`, `p`.`judul` limit $posisi, $batas ";
                    $query_p = mysqli_query($koneksi,$sql_p);
                    $posisi+1;
                    
                  while($data_k = mysqli_fetch_row($query_p)){
                    $id_comment = $data_k[0];
                    $nama = $data_k[1];
                    $email = $data_k[2];
                    $comment = $data_k[3];
                    $judul = $data_k[4];
                    $status = $data_k[5];

                  ?>
                    <tr>
                      <td><?php echo $posisi+1;?></td>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $judul;?></td>
                      <td><?php echo $status;?></td>
                      <td align="center">
                        <a href="index.php?include=edit-comment&data=<?php echo $id_comment;?>" 
                        class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                        <a href="index.php?include=detail-comment&data=<?php echo $id_comment;?>" 
                        class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $id_comment; ?>?')) 
                          window.location.href ='index.php?include=comment&aksi=hapus&data=<?php echo 
                          $id_comment;?>&notif=hapusberhasil'"
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
                    href='index.php?include=comment&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=comment&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                    if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                      if($i!=$halaman){
                          echo "<li class='page-item'><a class='page-link' 
                          href='index.php?include=comment&halaman=$i'>$i</a></li>";
                      }else{
                          echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                      }
                    }
                  }
                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=comment&halaman=$setelah'>»</a></li>";
                    echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=comment&halaman=$jum_halaman'>Last</a></li>";
                  }
                  
                    }?>
                    </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->