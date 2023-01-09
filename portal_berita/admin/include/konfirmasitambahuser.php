<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];
$foto = $_POST['foto'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$direktori = 'foto/'.$nama_file;
$username = mysqli_real_escape_string($koneksi, $user);
$password = mysqli_real_escape_string($koneksi, MD5($pass));

if(empty($nama)){
	header("Location:index.php?include=tambah-user&notif=tambahnamakosong");
}else if(empty($email)){
	header("Location:index.php?include=tambah-user&notif=tambahemailkosong");
}else if(empty($user)){
	header("Location:index.php?include=tambah-user&notif=tambahuserkosong");
}else if(empty($pass)){
	header("Location:index.php?include=tambah-user&notif=tambahpasskosong");
}else if(empty($level)){
	header("Location:index.php?include=tambah-user&notif=tambahlevelkosong");
}else if(empty($lokasi_file)){
	header("Location:index.php?include=tambah-user&notif=tambahfotokosong");
}else if(!move_uploaded_file($lokasi_file,$direktori)){
	header("Location:index.php?include=tambah-user&notif=tambahkosong&jenis=foto");
}else{
	$sql = "INSERT into `user` (`nama`, `email`, `username`, `password`, `level`, `foto`) 
	values ('$nama', '$email', '$username', '$password', '$level', '$nama_file')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=pengaturan-user&notif=tambahuserberhasil");	
}

?>