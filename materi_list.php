<?php
include "config.php";
?>
<html>
<head>
    <title>Daftar Materi</title>
</head>
<body>
    <h2>List Semua Materi</h2>
    <ul>
        <?php foreach ($materi as $mapel => $deskripsi): ?>
            <li><b><?= $mapel; ?></b>: <?= $deskripsi; ?></li>
        <?php endforeach; ?>
    </ul>
    <br>
    <a href="guru_menu.php">Kembali ke Menu Guru</a>
</body>
</html>
