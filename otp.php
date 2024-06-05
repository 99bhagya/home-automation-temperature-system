<?php 
 include('dbConfig.php');
    session_start();
    $msg = "";

   $otp = $_SESSION['otp'];
   if (isset($_POST['submit']))
   {
     $submit_otp = $_POST['otp'];
     if ($submit_otp == $otp ) 
     {
       header('location:new_password.php');
     }

     else
     {
        $msg = "Please Enter Valid OTP";
     }
   }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="reset_password.css">
  <title>Code Verification</title>
</head>
<body>

  <form method="post" action="#" onsubmit="return checkforblank()">
 
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Code Verification</h2>
                    <p style="color: red"><?php echo $msg; ?> </p>
                    <div class="inputbox">
                        <ion-icon name="logo-codepen"></ion-icon>
                        <input type="otp" class= "from-control" name="otp" id="otp" title = "enter your confirm code" placeholder="Enter otp">
                        <label for="">Confirmation code</label>
                    </div>
                    <button type="submit" name="submit" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </div>
</form>
  <script src="#"></script>
</body>
</html>