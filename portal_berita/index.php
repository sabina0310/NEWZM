<?php include('koneksi/koneksi.php');?>


<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/head.php');?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('includes/header.php');?>
<!-- End Header -->

<?php 
if(isset($_GET["include"])){
  $include = $_GET["include"];

  if ($include=="about"){
    include("include/about.php");
  }else if($include=="contact"){
    include("include/contact.php");
  }else if($include=="news"){
    include("include/news.php");
  }else if($include=="search-news"){
    include("include/search-news.php");
  }else if($include=="hotnews"){
    include("include/hotnews.php");
  }else if($include=="category"){
    include("include/category.php");
  }else if($include=="detail-post"){
    include("include/detail-post.php");
  }else if($include=="message"){
    include("forms/message.php");
  }else{
  include('include/main.php');
  }
}else{
  include("include/main.php");
}
  ?>
  
  <!-- End #main -->
  <?php include('includes/footer.php');?>
  <!-- ======= Footer ======= -->
  
  <?php include('includes/script.php');?>

</body>


</html>