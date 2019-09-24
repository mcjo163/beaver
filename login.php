<?php
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    echo "<p>username: $username <br>password: $password</p>";
?>