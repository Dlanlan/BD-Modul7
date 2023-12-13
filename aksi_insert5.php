<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_resep = $_POST['kode_resep'];
    $nama_resep = $_POST['nama_resep'];
    $query = "insert into resep_obat values('$kode_resep', '$nama_resep')";
    $sql = mysqli_query($koneksi, $query) or die("Gagal input" . $query);
    header("location:index.php");
?>