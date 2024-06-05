<?php
include('dbConfig.php');
session_start();
$msg = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $rand = rand(100000, 999999);
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $to = $email;
        $subject = "Verification Code";
        $body = "Hi,\n\nThis is your verification code: $rand";
        $header = "From: minidusamaradiwakara@gmail.com";

        if (mail($to, $subject, $body, $header)) {
            $_SESSION['email'] = $email; // Store the email in the session variable 'email'
            $_SESSION['otp'] = $rand;
            header('Location: otp.php');
            exit();
        } else {
            $msg = "OTP Sending Failed";
        }
    } else {
        $msg = "Please enter a valid email";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="forgot_password.css">
    <title>Get Confirm Code</title>
</head>
<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h2>Get Confirm Code</h2>
                <h5>Enter your login email and get your confirmation code through your email.</h5>
                <p style="color: red"><?php echo $msg; ?></p>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" class="from-control" name="email" id="email" title="enter email" placeholder="example@gmail.com">
                    <label for="email">Email</label>
                </div>
                <button type="submit" name="submit" id="continue-btn">Continue</button>
            </form>
        </div>
    </div>
</section>
<script type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>