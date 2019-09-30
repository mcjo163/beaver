<!DOCTYPE html>
<head>
    <meta http-equiv="Refresh" content="0; url=account.html">
    <title>Change Password submission</title>
</head>
<body>
<?php
    $old        = htmlspecialchars($_POST['old']);
    $new        = htmlspecialchars($_POST['new']);
    $confirmNew = htmlspecialchars($_POST['confirmNew']);
    echo "<p>old: $old <br>new: $new <br> confirm new: $confirmNew</p>";
?>
</body>