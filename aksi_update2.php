<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_apoteker = $_POST['kode_apoteker'];
    $nama_apoteker = $_POST['nama_apoteker'];
    $query = "update apoteker set nama_apoteker = '$nama_apoteker' where kode_apoteker = '$kode_apoteker'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>