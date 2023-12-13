<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_transaksi = $_POST['kode_transaksi'];
    $jenis_transaksi = $_POST['jenis_transaksi'];
    $query = "update transaksi set jenis_transaksi = '$jenis_transaksi' where kode_transaksi = '$kode_transaksi'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>