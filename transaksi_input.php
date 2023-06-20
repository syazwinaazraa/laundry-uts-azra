<h2>Add Transaksi</h2>

<form action="transaksi_proses.php" method="post">
    <table>
        <tr>
            <td>Tanggal Transaksi</td>
            <td><input type="date" name="tgl_transaksi"></td>
        </tr>
        <tr>
            <td>Pelanggan Transaksi</td>
            <td><input type="textarea" name="pelanggan_transaksi" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Harga Transaksi</td>
            <td><input type="textarea" name="harga_transaksi" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Berat Transaksi</td>
            <td><input type="textarea" name="berat_transaksi" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Tanggal Transaksi Selesai</td>
            <td><input type="date" name="tgl_transaksi_selesai" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Status Transaksi</td>
            <td><input type="textarea" name="status_transaksi" id="" cols="30" rows="10"></textarea></td>
        </tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>