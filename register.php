<!DOCTYPE html>
<head>
    <meta http-equiv="Refresh" content="0; url=albums.html"><!-- go to homepage -->
    <title>Register submission</title>
</head>
<body>
<?php
    $username        = htmlspecialchars($_POST['username']);
    $password        = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    $email           = htmlspecialchars($_POST['email']);
    echo "<p>username: $username <br>password: $password<br>confirm password: $confirmPassword<br>email: $email</p>";
?>
</body>