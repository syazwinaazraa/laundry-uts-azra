<?php

$id = $_GET['id'];
$pakaian = new App\Pakaian();

$row = $pakaian->edit($id);
?>

<h2>Edit Pakaian</h2>

<form action="pakaian_proses.php" method="post">
    <input type="hidden" name="id_pakaian" value="<?php echo $row['id_pakaian']; ?>">
    <table>
    <tr>
            <td>ID Pakaian</td>
            <td><input type="text" name="id_pakaian" value="<?php echo $row['id_pakaian']; ?>"></td>
        </tr>
        <tr>
            <td>Transaksi Pakaian</td>
            <td><input type="text" name="transaksi_pakaian" value="<?php echo $row['transaksi_pakaian']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Pakaian</td>
            <td><textarea name="jenis_pakaian" id="" cols="30" rows="10"><?php echo $row['jenis_pakaian']; ?></textarea></td>
        </tr>
        <tr>
            <td>Jumalah Pakaian</td>
            <td><textarea name="jumlah_pakaian" id="" cols="30" rows="10"><?php echo $row['jumlah_pakaian']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>