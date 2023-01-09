<?php 
        if(isset($_GET['data'])){
	      $id_post = $_GET['data'];
        //get post
        $sql = "SELECT `p`.`id_post`, `p`.`judul`, `k`.`nama_kategori`, `u`.`nama`, `p`.`isi`, `p`.`image`, `p`.`date`, `p`.`status`, `p`.`trending`, `p`.`headline`
                    FROM `post` `p` INNER JOIN `kategori` `k` ON `p`.`id_kategori` = `k`.`id_kategori` 
                    INNER JOIN `user` `u` ON `p`.`id_author` = `u`.`id_user` WHERE `p`.`id_post`='$id_post'";
        //echo $sql;
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
            $headline = $data[9];

        }}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Post</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=post">Data Post</a></li>
              <li class="breadcrumb-item active">Detail Data Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=post" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data Post<strong></td>
                      </tr>                      
                      <tr>
                        <td><strong>Cover Post<strong></td>
                        <td><img src="cover/<?php echo $image;?>" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?php echo $judul;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Kategori<strong></td>
                        <td width="80%"><?php echo $nama_kategori;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Author<strong></td>
                        <td width="80%"><?php echo $nama;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Status<strong></td>
                        <td width="80%"><?php echo $status;?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Trending<strong></td>
                        <td width="80%"><?php echo $trending;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Date<strong></td>
                        <td width="80%"><?php echo $date;?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Headline<strong></td>
                        <td width="80%"><?php echo $headline;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Isi<strong></td>
                        <td width="80%"><?php echo $isi;?></td>
                      </tr> 
                      
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>