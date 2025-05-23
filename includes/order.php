<?php include("../includes/header.php"); ?>
<link rel="stylesheet" href="../assets/css/style.css">
    <h2>Form Pemesanan Tiket Bus Malam</h2>
    <form action="thankyou.php" method="post">
        <label>Nama Penumpang</label>
        <input type="text" name="nama" required>

        <label>Tujuan</label>
        <select name="tujuan">
            <option value="Jakarta-Surabaya">Jakarta - Surabaya</option>
            <option value="Surabaya-Denpasar">Surabaya - Denpasar</option>
            <option value="Surabaya-Lampung">Surabaya - Lampung</option>
			<option value="Surabaya-Lampung">Jakarta - Madura</option>
        </select>

        <label>Tanggal Keberangkatan</label>
        <input type="date" name="tanggal" required>

        <label>Jumlah Tiket</label>
        <input type="number" name="jumlah" min="1" required>

        <button type="submit">Pesan</button>
    </form>
</div>
</body>
</html>

