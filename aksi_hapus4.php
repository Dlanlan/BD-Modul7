<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_jenis = $_GET['kode_jenis'];
    $query = "delete from jenis_obat where kode_jenis = '$kode_jenis'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>