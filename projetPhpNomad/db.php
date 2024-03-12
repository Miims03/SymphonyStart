<?php
try {
    $pdo = new PDO("mysql:dbname=nomad;host=localhost","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error". $e->getMessage();
}
?>