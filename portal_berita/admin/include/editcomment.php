<?php 
if(isset($_GET['data'])){
	$id_comment = $_GET['data'];
    $_SESSION['id_comment'] = $id_comment;

    //get data 
	$sql_d = "SELECT `id_comment`, `nama`, `email`, `id_post`, `comment`, `status`
    from `comment` WHERE `id_comment`='$id_comment'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $id_comment= $data_d[0];
        $nama= $data_d[1];
        $email= $data_d[2];
        $id_post= $data_d[3];
        $comment= $data_d[4];
        $status= $data_d[5];
    }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Comment</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=comment">Comment</a></li>
              <li class="breadcrumb-item active">Edit Comment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Comment</h3>
        <div class="card-tools">
          <a href="index.php?include=comment" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if(!empty($_GET['notif'])){?>
      <?php if($_GET['notif']=="editnamakosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data nama wajib di isi</div>
      <?php }?>
            <?php if($_GET['notif']=="editemailkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data email wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="edituserkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data comment wajib di isi</div>
      <?php }?>
      <?php }?>

      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-comment" enctype="multipart/form-data">
      <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i><u>Comment</u></span></label>
          </div>
        
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
            <select class="form-control" id="judul" name="judul">
            <?php 
        $sql_k = "SELECT `id_post`,`judul` FROM 
        `post`";
        $query_k = mysqli_query($koneksi, $sql_k);
        while($data_k = mysqli_fetch_row($query_k)){
        $id_p = $data_k[0];
        $judul = $data_k[1];
        ?>
        <option value="<?php echo $id_p;?>" 
        <?php if($id_p==$id_post){?>
        selected <?php }?>><?php echo $judul;?></option>
        <?php }?>
        </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Comment</label>
            <div class="col-sm-7">
            <textarea class="form-control" name="comment" id="editor1" 
      rows="12"><?php echo $comment;?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="level" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-7">
              <select class="form-control" id="status" name="status">
                <option value="Unapproved">Unapproved</option>
                <option value="Approved">Approved</option>
              </select>
            </div>
          </div>

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>