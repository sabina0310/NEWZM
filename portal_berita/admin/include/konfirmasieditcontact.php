<?php 
if(isset($_POST['update'])){
	$hlm = 'contact';
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
 
	if(empty($address)){
	    header("Location:index.php?include=contact&notif=editkosong&jenis=address");
	}else if(empty($phone)){
	    header("Location:index.php?include=contact&notif=editkosong&jenis=phone");
	}else if(empty($email)){
	    header("Location:index.php?include=contact&notif=editkosong&jenis=email");
	}else{
		   $sql = "update `contact` set `address`='$address', `phone`='$phone', `email`='$email' 
                  where `hlm`='$hlm'";
                  //echo $sql;
		   mysqli_query($koneksi,$sql);
		}
		header("Location:index.php?include=contact&notif=editberhasil"); 
	}

 
?>
