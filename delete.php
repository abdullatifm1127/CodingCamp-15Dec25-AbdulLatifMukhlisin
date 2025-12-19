<?php
require_once __DIR__ ."/database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ids = $_POST['ids'];
    $ids = implode(',' , $ids); //untuk menjadikan nilai 1 variable dari banyak array

    $query ="delete from Mobil where ID_Mobil in ($ids)";
$stmt = $conn-> prepare($query);
$stmt -> execute();

}


?>