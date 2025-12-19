<?php
require_once __DIR__ ."/database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ids = $_POST['ids'];
    $ids = implode(',' , $ids); 
    $query ="delete from Mobil where ID_Mobil in ($ids)";
$stmt = $conn-> prepare($query);
$stmt -> execute();

}


?>