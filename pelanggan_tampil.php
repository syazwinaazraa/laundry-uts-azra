<?php

$pelanggan = new App\Pelanggan;
$rows = $pelanggan->tampil();

?>

<h2>Pelanggan</h2>

<a href="index.php?hal=pelanggan_input" class="btn">Add Pelanggan</a>

<table>
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>HP Pelanggan</th>
        <th>Alamat Pelanggan</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pelanggan']; ?></td>
        <td><?php echo $row['nama_pelanggan']; ?></td>
        <td><?php echo $row['hp_pelanggan']; ?></td>
        <td><?php echo $row['alamat_pelanggan']; ?></td>
        <td><a href="index.php?hal=pelanggan_edit&id=<?php echo $row['id_pelanggan']; ?>" class="btn">EDIT</a></td>
        <td><a href="index.php?hal=pelanggan_hapus&id=<?php echo $row['id_pelanggan']; ?>" class="btn">DELETE</a></td>
    </tr>
    <?php } ?>
</table>
