<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_customer = $_POST['kode_customer'];
    $nama_customer = $_POST['nama_customer'];
    $query = "update customer set nama_customer = '$nama_customer' where kode_customer = '$kode_customer'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>