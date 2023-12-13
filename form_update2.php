<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");

$kode_apoteker = $_GET['kode_apoteker'];
$query = "SELECT * FROM apoteker WHERE kode_apoteker='$kode_apoteker'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<html>

<body>
    <legend>
        <h3>Ubah Data Apoteker</h3>
    </legend>
    <table border="3">
        <form action="aksi_update2.php" method="post">
            <tr>
                <td><label>Kode apoteker : </label></td>
                <td><input type="text" name="kode_apoteker" readonly placeholder="kode_apoteker" value="<?php echo $sql['kode_apoteker']; ?>" /></td>
            </tr>
            <tr>
                <td><label>Nama apooteker : </label></td>
                <td><input type="text" name="nama_apoteker" placeholder="nama_apoteker" autofocus value="<?php echo $sql['nama_apoteker']; ?>" /></td>
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