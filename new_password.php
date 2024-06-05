<?php
include('dbConfig.php');
session_start();
$msg = "";

if (isset($_POST['submit'])) {
    $new_password = $_POST['new_password'];
    $con_password = $_POST['confirm_password'];

    if ($new_password == $con_password) {
        // Sanitize and escape the input values to prevent SQL injection
        $new_password = mysqli_real_escape_string($conn, $new_password);
        $email = $_SESSION['email']; 
        
        // Encrypt the password using MD5
        $encrypted_password = md5($new_password);

        // Update the password for the specific email using prepared statement
        $updt_sqr = "UPDATE users SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($updt_sqr);
        $stmt->bind_param("ss", $encrypted_password, $email);
        $result = $stmt->execute();

        if ($result) {
            header('location:login.php');
            exit(); // Always include an exit() or die() after header redirect
        }
    } else {
        $msg = "New password does not match with confirm password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="reset_password.css">
    <title>Reset Password</title>
</head>
<body>
<form method="post" action="#" onsubmit="return checkforblank()">
    <section>
        <div class="form-box">
            <div class="form-value">
                <h2>Reset Password</h2>
                <p style="color: red"><?php echo $msg; ?> </p>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" class="form-control" name="new_password" id="new_password" title="enter new password" placeholder="new password">
                    <label for="">New Password</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" title="confirm new password" placeholder="confirm password">
                    <label for="">Confirm Password</label>
                </div>
                <button type="submit" name="submit" value="submit">Submit</button>
            </div>
        </div>
    </section>
</form>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>