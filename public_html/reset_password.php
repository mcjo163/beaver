<!DOCTYPE html>
<head>
    <meta http-equiv="Refresh" content="0; url=/beaver/public_html/">
    <title>Change Password submission</title>
</head>
<body>
<?php
    $email = htmlspecialchars($_POST['email']);
    echo "<p>email: $email</p>";

?>
</body>