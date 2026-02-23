<?php
// Program perhitungan angsuran hutang dengan ketentuan denda 0.15% per hari
// Input: pinjaman, bunga, lama angsuran, keterlambatan
// Link hasil sesuai gambar tugas

// definisi default
$pinjaman = $bunga = $lama = $delay = 0;
$jumlahPinjaman = $angsuran = $denda = $totalBayar = 0;

if (
    isset($_POST['pinjaman']) &&
    isset($_POST['bunga']) &&
    isset($_POST['lama'])
) {
    // ambil inputan
    $pinjaman = floatval($_POST['pinjaman']);
    $bunga   = floatval($_POST['bunga']);
    $lama    = intval($_POST['lama']);
    $delay   = intval($_POST['delay']);

    // perhitungan
    $jumlahPinjaman = $pinjaman + ($pinjaman * $bunga / 100);
    if ($lama > 0) {
        $angsuran = $jumlahPinjaman / $lama;
    }
    $denda = $angsuran * 0.0015 * $delay;
    $totalBayar = $angsuran + $denda;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Angsuran Hutang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        label { display: block; margin-top: 1rem; }
        input[type=text], input[type=number] { width: 200px; }
        .hasil { margin-top: 2rem; padding: 1rem; border: 1px solid #ccc; background:#f9f9f9; }
    </style>
</head>
<body>
    <h1>Program Penghitung Besaran Angsuran Hutang</h1>
    <form method="post" action="">
        <label>Besaran Pinjaman (Rp):
            <input type="number" name="pinjaman" value="<?php echo htmlspecialchars($pinjaman); ?>" required>
        </label>
        <label>Bunga (%) :
            <input type="number" step="0.01" name="bunga" value="<?php echo htmlspecialchars($bunga); ?>" required>
        </label>
        <label>Lama angsuran (bulan) :
            <input type="number" name="lama" value="<?php echo htmlspecialchars($lama); ?>" required>
        </label>
        <label>Keterlambatan angsuran (hari) :
            <input type="number" name="delay" value="<?php echo htmlspecialchars($delay); ?>">
        </label>
        <button type="submit">Hitung</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <div class="hasil">
        <p>Total Pinjaman : Rp. <?php echo number_format($jumlahPinjaman, 0, ',', '.'); ?></p>
        <p>Besaran angsuran per bulan : Rp. <?php echo number_format($angsuran, 0, ',', '.'); ?></p>
        <p>Denda keterlambatan : Rp. <?php echo number_format($denda, 0, ',', '.'); ?></p>
        <p>Besaran pembayaran : Rp. <?php echo number_format($totalBayar, 0, ',', '.'); ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
