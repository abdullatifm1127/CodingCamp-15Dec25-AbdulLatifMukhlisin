<?php
$dsn = "sqlsrv:server=ABDUL\SQLEXPRESS;database=TokoMobil";
$conn;
try {
    $conn = new PDO($dsn); 
} catch (PDOException $e) {
    echo $e;
}

?>