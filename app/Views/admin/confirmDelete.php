<!-- Confirm Delete View -->
<?php if ($ikan): ?>
    <!-- Tampilkan informasi ikan yang akan dihapus -->
    <p>Konfirmasi Hapus Data Ikan:</p>
    <p>ID:
        <?= $ikan['ID']; ?>
    </p>
    <p>Nama Ikan:
        <?= $ikan['Nama_Ikan']; ?>
    </p>
    <!-- Tambahkan informasi lain sesuai kebutuhan -->
<?php else: ?>
    <!-- Tampilkan pesan bahwa data tidak ditemukan -->
    <p>Data ikan tidak ditemukan.</p>
<?php endif; ?>