<?php

$id = $_GET['id'];
$pelanggan = new App\Pelanggan();

$row = $pelanggan->edit($id);
?>

<h2>Edit Pelanggan</h2>

<form action="pelanggan_proses.php" method="post">
    <input type="hidden" name="id_pelanggan" value="<?php echo $row['id_pelanggan']; ?>">
    <table>
        <tr>
            <td>ID Pelanggan</td>
            <td><input type="text" name="id_pelanggan" value="<?php echo $row['id_pelanggan']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']; ?>"></td>
        </tr>
        <tr>
            <td>HP Pelanggan</td>
            <td><textarea name="hp_pelanggan" id="" cols="30" rows="10"><?php echo $row['hp_pelanggan']; ?></textarea></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><textarea name="alamat_pelanggan" id="" cols="30" rows="10"><?php echo $row['alamat_pelanggan']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>