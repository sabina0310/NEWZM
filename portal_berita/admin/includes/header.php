<?php
$id_user = $_SESSION['id_user'];
//get profil
$sql = "select `nama`, `email`,`foto`, `level` from `user`
 where `id_user`='$id_user'";
 //echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
	$username = $data[0];
	$email = $data[1];
	$foto = $data[2];
	$level = $data[3];

}
?>

<!- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <!-- <a href="index.php" class="nav-link"> -->
      <img src="includes/logo.png" alt="AdminLTE Logo" class="nav-link"><!-- </a> -->
    </li>
    <!--<li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>-->
  </ul>

  <!-- Right(Notification) -->
  <ul class="navbar-nav ml-auto">
    <li class="dropdown user-box">
      
        <h4 class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <!-- <img src="profile-user.png>" alt="user-img"> -->
            <i class="fas fa-user-circle"></i>    
        </h4>

        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
            <li class="text-center">
                <h6>Hi, <?php echo $level; ?>!</h6>
            </li>
                              
            <li class="text-center"><a href="index.php?include=ubah-password"><i class="ti-settings m-r-5"></i><p><i class="fas fa-user-lock"></i> Change Password</p></a></li>
                          
            <li class="text-center"><a href="index.php?include=signout"><p><i class="fas fa-sign-out-alt"></i> Logout</p></a></li>
        </ul>
    </li>
  </ul> <!-- end navbar-right -->
  </nav>
  <!-- /.navbar -->