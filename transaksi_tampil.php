<?php

$transaksi = new App\Transaksi;
$rows = $transaksi->tampil();

?>

<h2>Transaksi</h2>

<a href="index.php?hal=transaksi_input" class="btn">Add Transaksi</a>

<table>
    <tr>
        <th>ID Transaksi</th>
        <th>Tanggal Transaksi</th>
        <th>Pelanggan Transaksi</th>
        <th>Harga Transaksi</th>
        <th>Berat Transaksi</th>
        <th>Tanggal Transaksi Selesai</th>
        <th>Status Transaksi</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_transaksi']; ?></td>
        <td><?php echo $row['tgl_transaksi']; ?></td>
        <td><?php echo $row['pelanggan_transaksi']; ?></td>
        <td><?php echo $row['harga_transaksi']; ?></td>
        <td><?php echo $row['berat_transaksi']; ?></td>
        <td><?php echo $row['tgl_transaksi_selesai']; ?></td>
        <td><?php echo $row['status_transaksi']; ?></td>
        <td><a href="index.php?hal=transaksi_edit&id=<?php echo $row['id_transaksi']; ?>" class="btn">EDIT</a></td>
        <td><a href="index.php?hal=transaksi_hapus&id=<?php echo $row['id_transaksi']; ?>" class="btn">DELETE</a></td>
    </tr>
    <?php } ?>
</table>
