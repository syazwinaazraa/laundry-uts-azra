<?php

$id = $_GET['id'];
$transaksi = new App\Transaksi();

$row = $transaksi->edit($id);
?>

<h2>Edit Transaksi</h2>

<form action="transaksi_proses.php" method="post">
    <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi']; ?>">
    <table>
        <tr>
            <td>Tanggal Transaksi</td>
            <td><input type="text" name="tgl_transaksi" value="<?php echo $row['tgl_transaksi']; ?>"></td>
        </tr>
        <tr>
            <td>Pelanggan Transaksi</td>
            <td><textarea name="pelanggan_transaksi" id="" cols="30" rows="10"><?php echo $row['pelanggan_transaksi']; ?></textarea></td>
        </tr>
        <tr>
            <td>Harga Transaksi</td>
            <td><textarea name="harga_transaksi" id="" cols="30" rows="10"><?php echo $row['harga_transaksi']; ?></textarea></td>
        </tr>
        <tr>
            <td>Berat Transaksi</td>
            <td><textarea name="berat_transaksi" id="" cols="30" rows="10"><?php echo $row['berat_transaksi']; ?></textarea></td>
        </tr>
        <tr>
            <td>Tanggal Transaksi Selesai</td>
            <td><textarea name="tgl_transaksi_selesai" id="" cols="30" rows="10"><?php echo $row['tgl_transaksi_selesai']; ?></textarea></td>
        </tr>
        <tr>
            <td>Status Transaksi</td>
            <td><textarea name="status_transaksi" id="" cols="30" rows="10"><?php echo $row['status_transaksi']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>