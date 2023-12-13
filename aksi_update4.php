<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_jenis = $_POST['kode_jenis'];
    $nama_obat = $_POST['nama_obat'];
    $query = "update jenis_obat set nama_obat = '$nama_obat' where kode_jenis = '$kode_jenis'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>