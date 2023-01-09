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

<div class="form mt-5">
          <form method="post" class="message-form" >
          <div class="text-center">
            <h5 class="comment-title">Send Your Message to Us</h5>
          </div> 
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mb-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mb-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <!-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center">
              <button type="submit" name="submit">Send Message</button>
            </div><!-- Send Message</button></div> -->
          </form>
        </div>