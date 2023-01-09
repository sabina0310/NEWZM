<?php 
$hlm='aboutus';
$query=mysqli_query($koneksi,"SELECT `judul`, `deskripsi` from about_us where hlm='$hlm'");
while($row=mysqli_fetch_array($query))
{

?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> About Us</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=contact">About Us</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Pengaturan About Us</h3>

      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
<!--           <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
            <?php if($_GET['notif']=="editberhasil"){?>
              <div class="alert alert-success" role="alert">
              Data Berhasil Diubah</div>

            <?php } else if($_GET['notif']=="editkosong"){?>
          <div class="alert alert-danger" role="alert">
          Maaf data kategori wajib di isi</div>
          <?php }?>
          <?php }?>
          </div>
           -->
          <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-about" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group row">
                <label for="foto" class="col-sm-12 col-form-label">
                  <span class="text-info">
                    <u>About Us</u></span></label>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label">Judul</label>
                <div class="col-sm-7">
                  <input type="text-area" class="form-control" name="judul" id="judul" value="<?php echo htmlentities($row['judul'])?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">Deskripsi</label>
                <div class="col-sm-7">
                <textarea class="form-control" name="deskripsi" id="editor1" 
      rows="12"><?php echo htmlentities($row['deskripsi'])?></textarea>
                </div>
              </div>
            </div>
            
            </div>
            <?php } ?>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-sm-12">
                <button type="submit" name="update" class="btn btn-info float-right">
                  <i class="fas fa-save"></i> Update</button>
              </div>
            </div>
            <!-- /.card-footer -->
          </form>

        </div>
        <!-- /.card -->

      </section>
