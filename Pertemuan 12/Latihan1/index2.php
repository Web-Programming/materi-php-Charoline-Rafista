<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan 1</title>
</head>
<body>
    <h2>Aplikasi Pencatatan Keuangan Sederhana</h2>
    <form method="POST" action="proses_keuangan.php">
        <label for="tglTransaksi">Tanggal Transaksi</label>
        <input id="tglTransaksi" name="tglTransaksi" type="date">
        <br/>
        <label for="jenisTransaksi">Jenis Transaksi</label>
        <select id="jenisTransaksi" name="jenisTransaksi">
            <option value="Pilih">Pilih</option>
            <option value="Pemasukan">Pemasukan</option>
            <option value="Pengeluaran">Pengeluaran</option>
        </select>
        <br/>
        <label for="nominal">Nominal</label>
        <input id="nominal" name="nominal" type="number" step="0.01" placeholder="Contoh: 100000">
        <br/>
        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan" name="keterangan" rows="4" placeholder="Isi keterangan"></textarea>
        <br/>
        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
