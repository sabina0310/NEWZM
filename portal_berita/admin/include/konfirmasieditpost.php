<?php 
if(isset($_SESSION['id_post'])){
    $id_post = $_SESSION['id_post'];
    $id_kategori = $_POST['nama_kategori'];
    $judul = $_POST['judul'];
    $id_author = $_POST['nama_author'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $headline = $_POST['headline'];
    $isi = $_POST['isi'];
    $trending = $_POST['trending'];
    $lokasi_file = $_FILES['image']['tmp_name'];
    $nama_file = $_FILES['image']['name'];
    $direktori = 'cover/'.$nama_file;

    //get cover 
    $sql_f = "SELECT `image` FROM `post` WHERE `id_post`='$id_post'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $image = $data_f[0];
        //echo $foto;
    }

        if(empty($id_kategori)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=kategori");
        }else if(empty($judul)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=judul");
        }else if(empty($id_author)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=namaauthor");
        }else if(empty($date)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=date");
        }/* else if(empty($status)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=status");
        } */else{
            $lokasi_file = $_FILES['image']['tmp_name'];
            $nama_file = $_FILES['image']['name'];
            $direktori = 'cover/'.$nama_file;
            if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($cover)){
                unlink("cover/$image");
            }
	$sql = "UPDATE `post` set 
    `id_kategori`='$id_kategori', `id_author`='$id_author',
    `judul`='$judul', `headline`='$headline', `isi`='$isi', `trending`='$trending',
    `image`='$nama_file', `date`='$date', `status`='$status'
	WHERE `id_post`='$id_post'";
	mysqli_query($koneksi,$sql);
}else{
	$sql = "UPDATE `post` set 
    `id_kategori`='$id_kategori', `id_author`='$id_author',
    `judul`='$judul', `headline`='$headline', `isi`='$isi', `trending`='$trending',
    `date`='$date', `status`='$status'
	WHERE `id_post`='$id_post'";
	mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=post&notif=editberhasil");
}
}

?>