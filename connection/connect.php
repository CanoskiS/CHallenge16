<?php

try {
    $connect = new PDO("mysql:host=localhost;dbname=challenge16", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}