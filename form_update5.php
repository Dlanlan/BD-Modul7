<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");

$kode_resep = $_GET['kode_resep'];
$query = "SELECT * FROM resep_obat WHERE kode_resep='$kode_resep'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<html>

<body>
    <legend>
        <h3>Ubah Data resep obat</h3>
    </legend>
    <table border="3">
        <form action="aksi_update5.php" method="post">
            <tr>
                <td><label>Kode resep : </label></td>
                <td><input type="text" name="kode_resep" readonly placeholder="kode_resep" value="<?php echo $sql['kode_resep']; ?>" /></td>
            </tr>

            <tr>
                <td><label>Nama resep : </label></td>
                <td><input type="text" name="nama_resep" placeholder="nama_resep" autofocus value="<?php echo $sql['nama_resep']; ?>" /></td>
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