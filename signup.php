<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="signup.css">
  <title>Sign Up Page</title>
</head>
<body>

  <form method="post" action="signup.php" onsubmit="return blank()">
 
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="POST" action="#">
                    <h2>Sign Up</h2>
                    <?php include('errors.php'); ?>
                    <div class="inputbox">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <input type="username" class= "from-control" name="username"  id="username" title = "enter username" placeholder="Username">
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" class= "from-control" name="email"  id="email" title = "enter email" placeholder="example@gmail.com">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class= "from-control" name="password" id="password" title = "enter password" placeholder="Password">
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class= "from-control" name="confirmpassword" id="confirmpassword" title = "enter same password to confirm" placeholder="Confirm Password">
                        <label for="">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn" name="reg_user">Sign up</button>
                    <div class="Login">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </div>
</form>
</body>
</html>