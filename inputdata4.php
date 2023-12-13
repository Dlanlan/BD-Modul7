<html>

<body>
    <legend>
        <h3>Input Data jenis obat</h3>
    </legend>

    <table border="3">
        <form action="aksi_insert4.php" method="POST">
            <tr>
                <td><label>Kode jenis : </label></td>
                <td><input type="text" name="kode_jenis" placeholder="kode_jenis"></td>
            </tr>

            <tr>
                <td><label>Nama obat : </label></td>
                <td><input type="text" name="nama_obat" placeholder="nama_obat"></td>
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