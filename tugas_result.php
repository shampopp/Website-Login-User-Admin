<?php
include "config.php";
$mapel = $_GET['mapel'] ?? "Tidak ada";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['jawaban'])) {
    $jawaban = $_POST['jawaban'];
}
?>
<html>
<head>
    <title>Hasil Tugas <?= $mapel; ?></title>
</head>
<body>
    <h2>Hasil Jawaban - <?= $mapel; ?></h2>

    <?php if (isset($soal[$mapel]) && isset($jawaban)): ?>
        <?php foreach ($soal[$mapel] as $i => $q): 
            $kunci = $q[1];
            $user = trim($jawaban[$i] ?? "");
            $cek = (strcasecmp($user, $kunci) == 0) ? 
                "<span style='color:green'>Benar</span>" : 
                "<span style='color:red'>Salah (Kunci: $kunci)</span>";
        ?>
            <p><?= ($i+1) ?>. <?= $q[0]; ?><br>Jawaban: <?= htmlspecialchars($user); ?> → <?= $cek; ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Tidak ada jawaban untuk diperiksa.</p>
    <?php endif; ?>

    <br>
    <a href="siswa_menu.php">Kembali</a>
</body>
</html>
