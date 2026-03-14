<?php
include "config.php";
$mapel = $_GET['mapel'] ?? "Tidak ada";
?>
<html>
<head>
    <title>Tugas <?= $mapel; ?></title>
</head>
<body>
    <h2>Latihan Soal: <?= $mapel; ?></h2>

    <?php if (isset($soal[$mapel])): ?>
        <form method="post" action="tugas_result.php?mapel=<?= $mapel; ?>">
            <?php 
            foreach ($soal[$mapel] as $i => $q) {
                echo "<p>".($i+1).". ".$q[0]."</p>";
                echo "<input type='text' name='jawaban[$i]'><br>";
            }
            ?>
            <br>
            <input type="submit" value="Kumpulkan">
        </form>
    <?php else: ?>
        <p>Tidak ada soal untuk mapel ini.</p>
    <?php endif; ?>

    <br>
    <a href="siswa_menu.php">Kembali</a>
</body>
</html>
