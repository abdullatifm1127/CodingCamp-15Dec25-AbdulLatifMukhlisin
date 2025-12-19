<?php
/*import file database*/
require_once __DIR__  . "/database.php";

$query = "select * from Mobil";
$stmt = $conn-> prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // mengambil data dari hasil eksekusi dan FETCH_ASSOC untuk menjadi array assosiatif
?>