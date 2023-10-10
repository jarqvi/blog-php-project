<?php

global $pdo;

try {
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    );
    $pdo = new PDO("mysql:host=mysql;dbname=blog-php", "root", "root", $options);

    echo json_encode(array(
        "status" => "success",
        "message" => "PDO connected to mysql"
    ));
    return $pdo;
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
    exit;
}