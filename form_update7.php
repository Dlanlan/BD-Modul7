<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");

$kode_transaksi = $_GET['kode_transaksi'];
$query = "SELECT * FROM transaksi WHERE kode_transaksi='$kode_transaksi'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<html>

<body>
    <legend>
        <h3>Ubah Data transaksi</h3>
    </legend>
    <table border="3">
        <form action="aksi_update7.php" method="post">
            <tr>
                <td><label>Kode transaksi : </label></td>
                <td><input type="text" name="kode_transaksi" readonly placeholder="kode_transaksi" value="<?php echo $sql['kode_transaksi']; ?>" /></td>
            </tr>

            <tr>
                <td><label>Jenis transaksi : </label></td>
                <td><input type="text" name="jenis_transaksi" placeholder="jenis_transaksi" autofocus value="<?php echo $sql['jenis_transaksi']; ?>" /></td>
            </tr>

            <tr>
                <td colspan="4" align="center">
                    <input type="submit" name="submit" value="Submit" onClick="return confirm('Apakah data akan disimpan?')" />
                </td>
            </tr>
        </form>
    </table>
    <a href="index.php">Kembali</a>
</body>

</html>