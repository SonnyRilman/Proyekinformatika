<!-- Contoh halaman di app/Views/SomePage.php -->
<?= $this->extend('Layout/template'); ?>

<?= $this->section('title') ?>Halaman Saya
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Konten halaman -->
<?= $this->endSection() ?>