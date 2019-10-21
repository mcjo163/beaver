<!DOCTYPE html>
<head>
    <meta http-equiv="Refresh" content="0; url=/beaver/public_html/album/albums.html"> <!-- go to homepage -->
    <title>Login submission</title>
</head>
<body>
<?php
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    echo "<p>username: $username <br>password: $password</p>";
?>
</body>