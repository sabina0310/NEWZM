<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah post</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=post">Data post</a></li>
              <li class="breadcrumb-item active">Tambah post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data post</h3>
        <div class="card-tools">
          <a href="index.php?include=post" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
        <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
        <?php }?>
      <?php }?>
      </div> 

      <form class="form-horizontal" action="index.php?include=konfirmasi-tambah-post" method="post" enctype="multipart/form-data">
        <div class="card-body">
          
          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Cover post </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
          <label for="kategori" class="col-sm-3 col-form-label">Kategori    
          post</label>
          <div class="col-sm-7">
          <select class="form-control" id="kategori" name="nama_kategori">
          <option value=""> Pilih Kategori </option>
          <?php 
          $sql_k = "SELECT `id_kategori`,`nama_kategori` FROM 
          `kategori` ORDER BY `id_kategori`";
          $query_k = mysqli_query($koneksi, $sql_k);
          while($data_k = mysqli_fetch_row($query_k)){
                $id_kat = $data_k[0];
                $kat = $data_k[1];
          ?>
                <option value="<?php echo $id_kat;?>"><?php echo $kat;?></option>
          <?php }?>
          </select>
          </div>
        </div>

          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul" id="nim" value="">
            </div>
          </div>
          <div class="form-group row">
          <label for="author" class="col-sm-3 col-form-label">Author</label>
          <div class="col-sm-7">
          <select class="form-control" id="author" name="nama_author">
          <option value=""> Pilih Author </option>
          <?php 
          $sql_t = "SELECT `id_user`,`nama` FROM `user` WHERE `level` = 'Author'
                  ORDER BY `id_user`";
          $query_t = mysqli_query($koneksi, $sql_t);
          while($data_t = mysqli_fetch_row($query_t)){
          $id_user = $data_t[0];
          $nama = $data_t[1];
          ?>
          <option value="<?php echo $id_user;?>"><?php echo $nama;?></option>
          <?php }?>
          </select>
          </div>
          </div> 

          <div class="form-group row">
            <label for="date" class="col-sm-3 col-form-label">Tahun Terbit</label>
            <div class="col-sm-7">
              <div class="input-group date">
                <input type="text" class="form-control" name="date" id="datepicker-days"  autocomplete="off"
                value="">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
          <label for="status" class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-7">
                        <select name="status" class="form-control" >
                            <option value="">Pilih Status</option>
                            <option value="Publish">Publish</option>
                            <option value="Draft">Draft</option>
                        </select>
          </div>
            </div>
            <div class="form-group row">
          <label for="status" class="col-sm-3 col-form-label">Trending</label>
          <div class="col-sm-7">
                        <select name="trending" class="form-control" >
                            <option value="">Pilih</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
          </div>
            </div>
            <div class="form-group row">
            <label for="headline" class="col-sm-3 col-form-label">Headline</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="headline" id="editor1" rows="12"></textarea>
            </div>
          </div> 
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="isi" id="editor2" rows="12"></textarea>
            </div>
          </div> 
             


          </div>
        </div>

      </div>
        <!-- /.card-footer -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
 