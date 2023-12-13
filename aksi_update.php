<?php
    $koneksi = mysqli_connect("localhost","root","","apotek") or die ("Gagal Koneksi Database");
    $kode_obat = $_POST['kode_obat'];
    $kode_jenis = $_POST['kode_jenis'];
    $nama_obat = $_POST['nama_obat'];
    $harga_obat = $_POST['harga_obat'];
    $bentuk_obat = $_POST['bentuk_obat'];
    $kegunaan = $_POST['kegunaan'];
    $aturan = $_POST['aturan'];
    $exp = $_POST['exp'];
    $query = "update obat set kode_jenis = '$kode_jenis', nama_obat = '$nama_obat', harga_obat = '$harga_obat', bentuk_obat = '$bentuk_obat', kegunaan = '$kegunaan', aturan = '$aturan', exp = '$exp' where kode_obat = '$kode_obat'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>