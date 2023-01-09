<?php 
if(isset($_SESSION['id_comment'])){
    $id_comment = $_SESSION['id_comment'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $id_post = $_POST['judul'];
    $comment = $_POST['comment'];
    $status = $_POST['status'];


        if(empty($nama)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=nama");
        }else if(empty($email)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=email");
        }else if(empty($id_post)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=judul");
        }else if(empty($comment)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=comment");
        }else if(empty($status)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=status");
        }/* else if(empty($status)){
            header("Location:index.php?include=edit-post&data=$id_post&notif=editkosong&jenis=status");
        } */else{
	$sql = "UPDATE `comment` set 
    `nama`='$nama',`email`='$email',
	`id_post`='$id_post',`comment`='$comment',
    `status`='$status'
	WHERE `id_comment`='$id_comment'";
	mysqli_query($koneksi,$sql);
}

header("Location:index.php?include=comment&notif=editberhasil");
}


?>