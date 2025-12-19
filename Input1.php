<?php
require_once __DIR__ . "/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['Id_Kendaraan'];
    $Merk = $_POST['Merk_Kendaraan'];
    $Model = $_POST['Type_Kendaraan'];
    $Tahun =  $_POST['Tahun_Kendaraan'];
    $Harga = $_POST['Harga_Kendaraan'];
    $StokMobil = $_POST['Stock_Kendaraan'];

    $query = "INSERT INTO Mobil (ID_Mobil, Merek, Model, Tahun, Harga, Stok) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $Merk);
    $stmt->bindParam(3, $Model);
    $stmt->bindParam(4, $Tahun);
    $stmt->bindParam(5, $Harga);
    $stmt->bindParam(6, $StokMobil);
    $stmt->execute();
}

?>