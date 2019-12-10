<?php
try {
    $pdo = new PDO("mysql:dbname=beaverbase;host=localhost", "webmaster", "password");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e.getMessage();
}