<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");

$kode_obat = $_GET['kode_obat'];
$query = "SELECT * FROM obat LEFT JOIN jenis_obat ON obat.kode_jenis = jenis_obat.kode_jenis WHERE kode_obat='$kode_obat'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<html>

<body>
    <legend>
        <h3>Ubah Data</h3>
    </legend>
    <table border="3">
        <form action="aksi_update.php" method="post">
            <tr>
                <td><label>Kode Obat : </label></td>
                <td><input type="text" name="kode_obat" readonly placeholder="kode_obat" value="<?php echo $sql['kode_obat']; ?>" /></td>
            </tr>
            <tr>
                <td><label>Nama Obat : </label></td>
                <td><input type="text" name="nama_obat" placeholder="nama_obat" autofocus value="<?php echo $sql['nama_obat']; ?>" /></td>
            </tr>

            <tr>
                <td><label>Jenis Obat : </label></td>
                <td>
                    <?php
                    $koneksi = mysqli_connect("localhost", "root", "", "apotek") or die("Gagal Koneksi Database");
                    $query = "select * from jenis_obat";
                    $data = mysqli_query($koneksi, $query) or die("Gagal query" . $query);
                    ?>
                    <select name="kode_jenis">
                        <option value="">
                            Pilih Jenis Obat
                            <?php echo $sql['kode_jenis']; ?>
                            <?php echo $sql['nama_obat']; ?>

                        </option>
                        <?php
                        while ($v = mysqli_fetch_array($data)) : ?>
                            <option value="<?php echo $v['kode_jenis']; ?>">
                                <?php echo $v['nama_obat']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
            </tr>

            <tr>
                <td><label>Harga Obat : </label></td>
                <td><input type="text" name="harga_obat" placeholder="harga_obat" autofocus value="<?php echo $sql['harga_obat']; ?>" /></td>
            </tr>

            <tr>
                <td><label>Bentuk Obat : </label></td>
                <td><input type="text" name="bentuk_obat" placeholder="bentuk_obat" autofocus value="<?php echo $sql['bentuk_obat']; ?>" /></td>
            </tr>
            <tr>
                <td><label>Kegunaan Obat :</label></td>
                <td><input type="text" name="kegunaan" placeholder="kegunaan" autofocus value="<?php echo $sql['kegunaan']; ?>" /></td>
            </tr>
            <tr>
                <td><label>Aturan Pakai :</label></td>
                <td><input type="text" name="aturan" placeholder="aturan" autofocus value="<?php echo $sql['aturan']; ?>" /></td>
            </tr>
            <tr>
                <td><label>Expired Date :</label></td>
                <td><input type="date" name="exp" placeholder="exp" autofocus value="<?php echo $sql['exp']; ?>" /></td>
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