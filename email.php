<?php
$to = "nightnick65@gmail.com";
$subject = "Temperature Status";
$message = $_GET['message'];
$headers = "From: minidusamaradiwakara@gmail.com\r\n";
mail($to, $subject, $message, $headers);
?>