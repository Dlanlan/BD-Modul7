<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_resep = $_GET['kode_resep'];
    $query = "delete from resep_obat where kode_resep = '$kode_resep'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>