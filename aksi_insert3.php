<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_customer = $_POST['kode_customer'];
    $nama_customer = $_POST['nama_customer'];
    $query = "insert into customer values('$kode_customer', '$nama_customer')";
    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>