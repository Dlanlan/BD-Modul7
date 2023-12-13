<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_resep = $_POST['kode_resep'];
    $nama_resep = $_POST['nama_resep'];
    $query = "update resep_obat set nama_resep = '$nama_resep' where kode_resep = '$kode_resep'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>