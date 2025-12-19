<?php
require_once __DIR__ . "/select.php";

?>
<html>
    <head></head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID_Mobil</th>
                    <th>Merek</th>
                    <th>Model</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Check</th>
                </tr>
            </thead>
            <tbody>
<?php
foreach($results as $result){
    $id_mobil = htmlspecialchars($result['ID_Mobil']);
    $merek = htmlspecialchars($result['Merek']);
    $model =htmlspecialchars($result['Model']);
    $tahun =htmlspecialchars($result['Tahun']);
    $harga = (int)htmlspecialchars($result['Harga']);
    $stok = htmlspecialchars($result['Stok']);

    echo "<tr>";
    echo "<td>$id_mobil</td>";
    echo "<td>$merek</td>";
    echo "<td>$model</td>";
    echo "<td>$tahun</td>";
    echo "<td>$harga juta</td>";
    echo "<td>$stok</td>";
    echo "<td><input type='checkbox' class='centang' value='$id_mobil'></td>";
    echo "</tr>";
}
?>
            </tbody>
        </table>

        <button id='btn-del'>Delete</button>

        <br><br><br>
        <form id="FM"  action="Input1.php" >
            <label for="id-mobil">Masukkan ID Mobil</label>
            <input type="number" min="1" id="id-mobil" name="Id_Kendaraan" >
            <br><br>
            <label for="Merk">Merek Mobil</label>
            <input type="text" id="Merk" name="Merk_Kendaraan" >
            <br><br>
            <label for="Model">Masukkan Model Mobil</label>
            <input type="text" id="Model" name="Type_Kendaraan" >
            <br><br>
            <label for="Tahun">Tahun Mobil</label>
            <input type="number" min="2010" max="2024" id="Tahun" name="Tahun_Kendaraan">
            <br><br>
            <label for="Harga">Harga satuan juta</label>
            <input type="number" min="13" step="1" id="Harga" name="Harga_Kendaraan" >
            <br><br>
            <label for="StokMobil">Stok</label>
            <input type="number" min="0" id='StokMobil' name="Stock_Kendaraan">
            <br><br><br>
            <input type="submit" value="masukkan" >
        </form>

        <br><br><br>
        <form id="update" action="update.php">
             <table border=2px style="border-collapse: collapse;">
                 <thead>
                     <tr>
                        <th>Merek</th>
                        <th>Model</th>
                        <th>Tahun_Mobil</th>
                        <th>Harga</th>
                        <th>Stok</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                        <tbody>
                            <?php
                            foreach ($results as $result){
                                $id = htmlspecialchars($result['ID_Mobil']);
                                $merek = htmlspecialchars($result['Merek']);
                                $model = htmlspecialchars($result['Model']);
                                $tahun = htmlspecialchars($result['Tahun']);
                                $harga = htmlspecialchars($result['Harga']);
                                $stok = htmlspecialchars($result['Stok']);
                                

                                echo "<tr>";
                                echo "<input type='hidden' name='id_mobil[$id]' value='$id'>";
                                echo "<td>  <input type='text' name='Merek_mobil[$id]' value='$merek'></td>";
                                echo "<td> <input type='text' name='Type_mobil[$id]' value='$model'></td>";
                                echo "<td> <input type='number' name='tahun_mobil[$id]' value='$tahun'></td>";
                                echo "<td> <input type='number' name='harga_mobil[$id]' value='$harga'></td>";
                                echo "<td>  <input type='number' name='Stok_mobil[$id]' value='$stok'></td>";
                                echo "</tr>";
                            }
                          
                            ?>
                        </tbody>
                    </tr>
                </tbody>
                        </table>
                        <input type="submit">
                        </form>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="Input.js"></script>
        <script src="delete.js"></script>
        <script src="update.js"></script>

    </body>
    </html>

  