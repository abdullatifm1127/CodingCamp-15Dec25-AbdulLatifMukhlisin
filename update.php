<?php
require_once __DIR__ . "/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $stmt = $conn->prepare("UPDATE Mobil SET Merek = ?, Model = ?, Harga = ?, Tahun =?, Stok = ? WHERE ID_Mobil = ?");

    foreach ($_POST['id_mobil'] as $id => $value){
           $id = $_POST['id_mobil'] [$id];
           $merek = $_POST['Merek_mobil'] [$id];
           $model = $_POST['Type_mobil'] [$id];
           $tahun = $_POST['tahun_mobil'] [$id];
           $harga = $_POST['harga_mobil'] [$id];
           $stok = $_POST['Stok_mobil'] [$id];

           $stmt->bindParam(1, $merek);
           $stmt->bindParam(2, $model);
           $stmt->bindParam(3, $harga);
           $stmt->bindParam(4, $tahun);
           $stmt->bindParam(5, $stok);
           $stmt->bindParam(6, $id);
           $stmt->execute();
    }
}

?>
