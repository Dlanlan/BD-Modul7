<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");

$kode_stok = $_GET['kode_stok'];
$query = "SELECT * FROM stok_obat WHERE kode_stok='$kode_stok'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<html>

<body>
    <legend>
        <h3>Ubah Data stok obat</h3>
    </legend>
    <table border="3">
        <form action="aksi_update6.php" method="post">
            <tr>
                <td><label>Kode stok : </label></td>
                <td><input type="text" name="kode_stok" readonly placeholder="kode_stok" value="<?php echo $sql['kode_stok']; ?>" /></td>
            </tr>

            <tr>
                <td><label>Nama obat : </label></td>
                <td><input type="text" name="nama_obat" placeholder="nama_obat" autofocus value="<?php echo $sql['nama_obat']; ?>" /></td>
            </tr>

            <tr>
                <td><label>stok : </label></td>
                <td><input type="text" name="stok" placeholder="stok" autofocus value="<?php echo $sql['stok']; ?>" /></td>
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