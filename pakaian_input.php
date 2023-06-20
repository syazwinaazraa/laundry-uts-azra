<h2>Add Pakaian</h2>

<form action="pakaian_proses.php" method="post">
    <table>
    <tr>
            <td>ID Pakaian</td>
            <td><input type="text" name="id_pakaian"></td>
        </tr>
        <tr>
            <td>Transaksi Pakaian</td>
            <td><input type="text" name="transaksi_pakaian"></td>
        </tr>
        <tr>
            <td>Jenis Pakaian</td>
            <td><input type="textarea" name="jenis_pakaian" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
        <tr>
            <td>Jumlah Pakaian</td>
            <td><input type="textarea" name="jumlah_pakaian" id="" cols="30" rows="10"></textarea></td>
        </tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>