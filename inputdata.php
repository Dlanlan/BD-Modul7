<html>

<body>
    <legend>
        <h3>Input Data</h3>
    </legend>

    <table border="3">
        <form action="aksi_insert.php" method="POST">
            <tr>
                <td><label>Kode Obat : </label></td>
                <td><input type="text" name="kode_obat" placeholder="kode_obat"></td>
            </tr>

            <tr>
                <td><label>Nama Obat : </label></td>
                <td><input type="text" name="nama_obat" placeholder="nama_Obat"></td>
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
                        </option>
                        <?php
                        while ($v = mysqli_fetch_array($data)) : ?>
                            <option value="<?php echo $v['kode_jenis']; ?>">
                                <?php echo $v['nama_obat']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label>Harga Obat : </label></td>
                <td><input type="text" name="harga_obat" placeholder="harga_obat"></td>
            </tr>

            <tr>
                <td><label for="">Bentuk obat : </label></td>
                <td><input type="text" name="bentuk_obat" placeholder="bentuk_obat"></td>
            </tr>

            <tr>
                <td><label>Kegunaan Obat : </label></td>
                <td><input type="text" name="kegunaan" placeholder="kegunaan"></td>
            </tr>
            <tr>
                <td><label>Aturan Pakai : </label></td>
                <td><input type="text" name="aturan" placeholder="aturan"></td>
            </tr>
            <tr>
                <td><label>Expired Date : </label></td>
                <td><input type="date" name="exp" placeholder="exp"></td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <input type="submit" name="submit" value="Submit" onclick="return Confirm('Apakah data akan disimpan?')">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>