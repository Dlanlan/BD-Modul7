<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_transaksi = $_GET['kode_transaksi'];
    $query = "delete from transaksi where kode_transaksi = '$kode_transaksi'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>