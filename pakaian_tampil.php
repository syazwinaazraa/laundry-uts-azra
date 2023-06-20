<?php

$pakaian = new App\Pakaian;
$rows = $pakaian->tampil();

?>

<h2>Pakaian</h2>

<a href="index.php?hal=pakaian_input" class="btn">Add Pakaian</a>

<table>
    <tr>
        <th>ID Pakaian</th>
        <th>Transaksi Pakaian</th>
        <th>Jenis Pakaian</th>
        <th>Jumlah Pakaian</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pakaian']; ?></td>
        <td><?php echo $row['transaksi_pakaian']; ?></td>
        <td><?php echo $row['jenis_pakaian']; ?></td>
        <td><?php echo $row['jumlah_pakaian']; ?></td>
        <td><a href="index.php?hal=pakaian_edit&id=<?php echo $row['id_pakaian']; ?>" class="btn">EDIT</a></td>
        <td><a href="index.php?hal=pakaian_hapus&id=<?php echo $row['id_pakaian']; ?>" class="btn">DELETE</a></td>
    </tr>
    <?php } ?>
</table>
