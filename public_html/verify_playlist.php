<?php
    $name = $_POST['playlist_name'];
    if($name == ""){
        include("/Library/WebServer/Documents/beaver/public_html/playlist_error.html");
    }