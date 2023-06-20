<?php

require_once "inc/Koneksi.php";
require_once "app/Pakaian.php";

$pakaian = new App\Pakaian();

if (isset($_POST['btn_simpan'])) {
    $pakaian->simpan();
    header("location:index.php?hal=pakaian_tampil");
}

if (isset($_POST['btn_update'])) {
    $pakaian->update();
    header("location:index.php?hal=pakaian_tampil");
}

