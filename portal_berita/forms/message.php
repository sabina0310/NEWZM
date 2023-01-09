<?php include('koneksi/koneksi.php');?>
<?php
  if(isset($_POST['submit']))
  {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $msg = $_POST['message'];
  
  
          if(empty($name)){
            echo "<script>alert('Something went wrong. Please try again.');</script>";
          }else if(empty($email)){
            echo "<script>alert('Something went wrong. Please try again.');</script>";
          }else if(empty($subject)){
            echo "<script>alert('Something went wrong. Please try again.');</script>";
          }else if(empty($msg)){
            echo "<script>alert('Something went wrong. Please try again.');</script>";
          }else{
    $sql = "INSERT INTO `message` (`name`, `email`, `subject`, `msg`) VALUES
    ('$name', '$email', '$subject', '$msg')";
    mysqli_query($koneksi,$sql);
  
  
  echo "<script>alert('Message successfully sent. Thankyou ');</script>";
  }
  }
?>