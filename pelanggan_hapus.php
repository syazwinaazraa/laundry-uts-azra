<?php

$id = $_GET['id'];

$pelanggan = new App\Pelanggan();
$rows = $pelanggan->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pelanggan_tampil">Kembali</a>
</div>