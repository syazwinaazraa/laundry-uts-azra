<?php

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";

$transaksi = new App\Transaksi();

if (isset($_POST['btn_simpan'])) {
    $transaksi->simpan();
    header("location:index.php?hal=transaksi_tampil");
}

if (isset($_POST['btn_update'])) {
    $transaksi->update();
    header("location:index.php?hal=transaksi_tampil");
}

