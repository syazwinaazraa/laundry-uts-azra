<?php

$id = $_GET['id'];

$transaksi = new App\Transaksi();
$rows = $transaksi->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=transaksi_tampil">Kembali</a>
</div>