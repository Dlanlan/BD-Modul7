<html>

<body>
    <legend>
        <h3>Input Data stok obat</h3>
    </legend>

    <table border="3">
        <form action="aksi_insert6.php" method="POST">
            <tr>
                <td><label>Kode stok : </label></td>
                <td><input type="text" name="kode_stok" placeholder="kode_stok"></td>
            </tr>

            <tr>
                <td><label>Nama obat : </label></td>
                <td><input type="text" name="nama_obat" placeholder="nama_obat"></td>
            </tr>

            <tr>
                <td><label>Stok : </label></td>
                <td><input type="text" name="stok" placeholder="stok"></td>
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