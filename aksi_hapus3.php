<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_customer = $_GET['kode_customer'];
    $query = "delete from customer where kode_customer = '$kode_customer'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>