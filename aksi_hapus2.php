<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_apoteker = $_GET['kode_apoteker'];
    $query = "delete from apoteker where kode_apoteker = '$kode_apoteker'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>