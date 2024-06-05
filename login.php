<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.css">
  <title>Login Page</title>
</head>
<body>

  <form method="post" action="login.php" onsubmit="return blank()">
 
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="#">
                    <h2>Log In</h2>
                    <?php include('errors.php'); ?>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" class= "from-control" name="email"  id="email" title = "enter email" placeholder="example@gmail.com">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class= "from-control" name="password" id="password" title = "enter password" placeholder="User Password">
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="forgot_password.php">Forget Password</a></label>
                      
                    </div>
                    <button type="submit" class="btn" name="login_user">Log in</a></button>
                    <div class="register">
                        <p>Don't have an account <a href="signup.php">Register</a></p>
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