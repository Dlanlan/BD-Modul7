<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_jenis = $_POST['kode_jenis'];
    $nama_obat = $_POST['nama_obat'];
    $query = "insert into jenis_obat values('$kode_jenis', '$nama_obat')";
    $sql = mysqli_query($koneksi, $query) or die("Gagal input" . $query);
    header("location:index.php");
?>