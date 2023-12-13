<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");

$kode_customer = $_GET['kode_customer'];
$query = "SELECT * FROM customer WHERE kode_customer='$kode_customer'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<html>

<body>
    <legend>
        <h3>Ubah Data customer</h3>
    </legend>
    <table border="3">
        <form action="aksi_update3.php" method="post">
            <tr>
                <td><label>Kode customer : </label></td>
                <td><input type="text" name="kode_customer" readonly placeholder="kode_customer" value="<?php echo $sql['kode_customer']; ?>" /></td>
            </tr>

            <tr>
                <td><label>Nama customer : </label></td>
                <td><input type="text" name="nama_customer" placeholder="nama_customer" autofocus value="<?php echo $sql['nama_customer']; ?>" /></td>
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