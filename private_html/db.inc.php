<?php
try {
    $pdo = new PDO("mysql:dbname=beaverbase; host=localhost", "root", "nessa123");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e.getMessage();
}

