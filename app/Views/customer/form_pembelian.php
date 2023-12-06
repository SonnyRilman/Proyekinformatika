<!-- app/Views/form_pembelian.php -->
<!DOCTYPE html>
<html lang="en">

<head>
 
</head>

<body>
    <form action="/customer/proses-pembelian" method="post">
        <!-- Input fields for purchase form -->
        <!-- <label for="Resi_Transaksi">Resi Utama:</label>
        <input type="text" name="resi_transaksi" required> -->

        <label for="Nama_Costumer">Nama Costumer:</label>
        <input type="text" name="nama_costumer" value="<?= null; ?>" required>


        <label for="Alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= session('alamat'); ?>" required>

        <label for="Email">Gmail:</label>
        <input type="text" name="gmail" value="<?= session('gmail'); ?>" required>

        <label for="Nama_Ikan">Nama Ikan:</label>
        <input type="text" name="nama_ikan" value="<?= $ikan['Nama_Ikan']; ?>" readonly>

        <label for="Jumlah_Ikan">Jumlah Ikan:</label>
        <input type="number" name="jumlah_ikan" id="jumlah_ikan" min="1" max="<?= $ikan['Stock']; ?>" required
            onchange="updateTotalHarga()">

        <label for="Total_Harga">Total Harga:</label>
        <input type="text" name="total_harga" id="total_harga" readonly>

        <label for="Jenis_Payment">Jenis Payment:</label>
        <select name="jenis_payment" required>
        <option value="Transfer Bank">Transfer Bank</option>
        <option value="COD">COD</option>
    
        </select>

        <label for="Tanggal_Beli">Tanggal Beli:</label>
        <input type="hidden" name="tanggal_beli" value="<?= date('Y-m-d'); ?>">

        <label for="Status">Status:</label>
        <input type="hidden" name="status" value="Menunggu Konfirmasi">

        <button type="submit">Beli Sekarang</button>
      </form>

    <script>b
        function updateTotalHarga() {
           
            var jumlahIkan = parseInt(document.getElementById('jumlah_ikan').value);
            var hargaPerEkor = <?= $ikan['Harga_Per_Ekor']; ?>;

           
            var totalHarga = jumlahIkan * hargaPerEkor;

            
            document.getElementById('total_harga').value = totalHarga;
        }
    </script>
</body>

</html>
