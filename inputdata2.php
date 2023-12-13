<html>

<body>
    <legend>
        <h3>Input Data Apoteker</h3>
    </legend>

    <table border="3">
        <form action="aksi_insert2.php" method="POST">
            <tr>
                <td><label>Kode apoteker : </label></td>
                <td><input type="text" name="kode_apoteker" placeholder="kode_apoteker"></td>
            </tr>

            <tr>
                <td><label>Nama apoteker : </label></td>
                <td><input type="text" name="nama_apoteker" placeholder="nama_apoteker"></td>
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