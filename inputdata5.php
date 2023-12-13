<html>

<body>
    <legend>
        <h3>Input Data resep obat</h3>
    </legend>

    <table border="3">
        <form action="aksi_insert5.php" method="POST">
            <tr>
                <td><label>Kode resep : </label></td>
                <td><input type="text" name="kode_resep" placeholder="kode_resep"></td>
            </tr>

            <tr>
                <td><label>Nama resep : </label></td>
                <td><input type="text" name="nama_resep" placeholder="nama_resep"></td>
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