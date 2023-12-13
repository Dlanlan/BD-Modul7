<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_stok = $_GET['kode_stok'];
    $query = "delete from stok_obat where kode_stok = '$kode_stok'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>