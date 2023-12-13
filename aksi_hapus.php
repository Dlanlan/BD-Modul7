<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_obat = $_GET['kode_obat'];
    $query = "delete from obat where kode_obat = '$kode_obat'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>