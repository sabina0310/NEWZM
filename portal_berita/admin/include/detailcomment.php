<?php 
        if(isset($_GET['data'])){
	      $id_comment = $_GET['data'];
        //get profil
        $sql = "SELECT `c`.`id_comment`, `c`.`nama`, `c`.`email`, `p`.`judul`, `c`.`comment`, `c`.`date`, `c`.`status`
        from `comment` `c` INNER JOIN `post` `p` ON `c`.`id_post` = `p`.`id_post` WHERE `c`.`id_comment`='$id_comment'";
        //echo $sql;
            $query = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_row($query)){
              $id_comment = $data[0];
              $nama = $data[1];
              $email = $data[2];
              $judul = $data[3];
              $comment = $data[4];
              $date = $data[5];
              $status = $data[6];
        }}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Comment</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=comment">Data Comment</a></li>
              <li class="breadcrumb-item active">Detail Data Comment</li>
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
                  <a href="index.php?include=comment" class="btn btn-sm btn-warning float-right">
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
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email;?></td>
                      </tr>             
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?php echo $judul;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Comment<strong></td>
                        <td width="80%"><?php echo $comment;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Date<strong></td>
                        <td width="80%"><?php echo $date;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Status<strong></td>
                        <td width="80%"><?php echo $status;?></td>
                      
                    </tbody>
                  </table>  
                  </div>
        <!-- /.card-body -->
        
      </form>
    </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            
            <!-- /.card -->

    </section>