<?php 
if(isset($_POST['update'])){
	$hlm = 'aboutus';
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
 
	if(empty($judul)){
	    header("Location:index.php?include=contact&notif=editkosong&jenis=judul");
	}else if(empty($deskripsi)){
	    header("Location:index.php?include=contact&notif=editkosong&jenis=deskripsi");
	}else{
		   $sql = "update `about_us` set `judul`='$judul', `deskripsi`='$deskripsi'
                  where `hlm`='$hlm'";
                  //echo $sql;
		   mysqli_query($koneksi,$sql);
		}
		header("Location:index.php?include=about-us&notif=editberhasil"); 
	}

 
?>
