<?php include("../includes/header.php"); ?>
<link rel="stylesheet" href="../assets/css/style.css">
    <h2>Terima Kasih!</h2>
    <p>Pesanan atas nama <strong><?php echo htmlspecialchars($_POST['nama']); ?></strong> berhasil dipesan.</p>
    <ul>
        <li>Tujuan: <?php echo htmlspecialchars($_POST['tujuan']); ?></li>
        <li>Tanggal: <?php echo htmlspecialchars($_POST['tanggal']); ?></li>
        <li>Jumlah Tiket: <?php echo htmlspecialchars($_POST['jumlah']); ?></li>
    </ul>
    <p><a href="../index.php">Kembali ke Beranda</a></p>
</div>
</body>
</html>
