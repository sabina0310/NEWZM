<?php 
    $id_kategori = $_POST['nama_kategori'];
    $judul = $_POST['judul'];
    $id_author = $_POST['nama_author'];
    $date = $_POST['date'];
    $headline = $_POST['headline'];
    $isi = $_POST['isi'];
    $status = $_POST['status'];
    $trending = $_POST['trending'];
    $lokasi_file = $_FILES['image']['tmp_name'];
    $nama_file = $_FILES['image']['name'];
    $direktori = 'cover/'.$nama_file;
    

    if(empty($id_kategori)){	   
        header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=post");
    }else if(empty($judul)){
	header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=judul");
    }else if(empty($id_author)){	    
        header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=author");
    }else if(empty($date)){
	header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=date");
    }else if(empty($status)){
	header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=status");
    }else if(empty($trending)){
        header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=trending");
    }else if(empty($isi)){
        header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=isi");
    }else if(!move_uploaded_file($lokasi_file,$direktori)){
        header("Location:index.php?include=tambah-post&notif=tambahkosong&jenis=image");
    }else{   
	$sql = "INSERT INTO `post` (`id_kategori`,`judul`,`id_author`,`date`,`headline`, `isi`,`trending`,`image`,`status`) VALUES ('$id_kategori','$judul','$id_author','$date','$headline','$isi','$trending','$nama_file','$status')";
      //echo $sql;
	mysqli_query($koneksi,$sql);
	$id_post = mysqli_insert_id($koneksi);

        header("Location:index.php?include=post&notif=tambahberhasil");
    }
?>