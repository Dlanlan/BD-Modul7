<html>

<body>
    <legend>
        <h3>Input Data Customer</h3>
    </legend>

    <table border="3">
        <form action="aksi_insert3.php" method="POST">
            <tr>
                <td><label>Kode customer : </label></td>
                <td><input type="text" name="kode_customer" placeholder="kode_customer"></td>
            </tr>

            <tr>
                <td><label>Nama customer : </label></td>
                <td><input type="text" name="nama_customer" placeholder="nama_customer"></td>
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