<html>

<body>
    <legend>
        <h3>Input Data transaksi</h3>
    </legend>

    <table border="3">
        <form action="aksi_insert7.php" method="POST">
            <tr>
                <td><label>Kode transaksi : </label></td>
                <td><input type="text" name="kode_transaksi" placeholder="kode_transaksi"></td>
            </tr>

            <tr>
                <td><label>Jenis transaksi : </label></td>
                <td><input type="text" name="jenis_transaksi" placeholder="jenis_transaksi"></td>
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