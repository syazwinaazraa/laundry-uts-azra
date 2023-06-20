<?php

$id = $_GET['id'];

$pakaian = new App\Pakaian();
$rows = $pakaian->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pakaian_tampil">Kembali</a>
</div>