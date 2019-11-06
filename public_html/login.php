<!DOCTYPE html>
    <?php
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if($username == "" || $password == ""){
        include "/Library/WebServer/Documents/beaver/public_html/login_error.html";
    }else{
        include "/Library/WebServer/Documents/beaver/public_html/album/albums.html";
    }














