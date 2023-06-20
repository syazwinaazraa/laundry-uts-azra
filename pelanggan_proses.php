<?php

require_once "inc/Koneksi.php";
require_once "app/Pelanggan.php";

$pelanggan = new App\Pelanggan();

if (isset($_POST['btn_simpan'])) {
    $pelanggan->simpan();
    header("location:index.php?hal=pelanggan_tampil");
}

if (isset($_POST['btn_update'])) {
    $pelanggan->update();
    header("location:index.php?hal=pelanggan_tampil");
}

