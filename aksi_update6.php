<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_stok = $_POST['kode_stok'];
    $nama_obat = $_POST['nama_obat'];
    $stok = $_POST['stok'];
    $query = "update stok_obat set nama_obat = '$nama_obat', stok = '$stok' where kode_stok = '$kode_stok'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>