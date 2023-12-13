<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");

$kode_jenis = $_GET['kode_jenis'];
$query = "SELECT * FROM jenis_obat WHERE kode_jenis='$kode_jenis'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<html>

<body>
    <legend>
        <h3>Ubah Data jenis obat</h3>
    </legend>
    <table border="3">
        <form action="aksi_update4.php" method="post">
            <tr>
                <td><label>Kode jenis : </label></td>
                <td><input type="text" name="kode_jenis" readonly placeholder="kode_jenis" value="<?php echo $sql['kode_jenis']; ?>" /></td>
            </tr>

            <tr>
                <td><label>Nama obat : </label></td>
                <td><input type="text" name="nama_obat" placeholder="nama_obat" autofocus value="<?php echo $sql['nama_obat']; ?>" /></td>
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