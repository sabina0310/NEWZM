<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
  }else if($include=="konfirmasi-edit-profil"){
    include("include/konfirmasieditprofil.php");
  }else if($include=="konfirmasi-edit-post"){
    include("include/konfirmasieditpost.php");
  }else if($include=="konfirmasi-tambah-post"){
    include("include/konfirmasitambahpost.php");
  }else if($include=="konfirmasi-ubah-password"){
    include("include/konfirmasiubahpassword.php");
  }else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasitambahuser.php");
  }else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasiedituser.php");
  }else if($include=="konfirmasi-tambah-kategori"){
    include("include/konfirmasitambahkategori.php");
  }else if($include=="konfirmasi-edit-kategori"){
    include("include/konfirmasieditkategori.php");
  }else if($include=="konfirmasi-edit-post"){
    include("include/konfirmasieditpost.php");
  }else if($include=="konfirmasi-edit-comment"){
    include("include/konfirmasieditcomment.php");
  }else if($include=="konfirmasi-edit-about"){
    include("include/konfirmasieditabout.php");
  }else if($include=="konfirmasi-edit-contact"){
    include("include/konfirmasieditcontact.php");
  }
  else if($include=="signout"){
    include("include/signout.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id_user'])){
      ?>
      <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
          <?php 
          if ($include=="edit-profil"){
            include("include/editprofil.php");
          }else if($include=="post"){
            include("include/post.php");
          }else if($include=="tambah-post"){
            include("include/tambahpost.php");
          }else if($include=="edit-post"){
            include("include/editpost.php");
          }else if($include=="ubah-password"){
            include("include/ubahpassword.php");
          }else if($include=="pengaturan-user"){
            include("include/pengaturanuser.php");
          }else if($include=="detail-user"){
            include("include/detailuser.php");
          }else if($include=="tambah-user"){
            include("include/tambahuser.php");
          }else if($include=="kategori"){
            include("include/kategori.php");
          }else if($include=="edit-user"){
            include("include/edituser.php");
          }else if($include=="tambah-kategori"){
            include("include/tambahkategori.php");
          }else if($include=="edit-kategori"){
            include("include/editkategori.php");
          }else if($include=="detail-post"){
            include("include/detailpost.php");
          }else if($include=="comment"){
            include("include/comment.php");
          }else if($include=="detail-comment"){
            include("include/detailcomment.php");
          }else if($include=="about-us"){
            include("include/aboutus.php");
          }else if($include=="edit-comment"){
            include("include/editcomment.php");
          }else if($include=="contact"){
            include("include/contact.php");
          }else if($include=="message"){
            include("include/message.php");
          }
          else {
            include("include/profil.php");
          }
          ?>
          </div>
          <!-- /.content-wrapper -->
          <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
      </body>
      <?php
  	}else{
    //pemanggilan halaman form login
    include("include/login.php");
  	}  
}else{
  if(isset($_SESSION['id_user'])){
    ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
          <?php include("includes/header.php") ?>
          <?php include("includes/sidebar.php") ?>
          <div class="content-wrapper">
          <?php
            //pemanggilan profil
            include("include/profil.php");
          ?>
          </div>
          <!-- /.content-wrapper -->
          <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
      </body>
      <?php  
  }else{
  //pemanggilan halaman form login
    include("include/login.php");
  } 
}
?>


</html>
