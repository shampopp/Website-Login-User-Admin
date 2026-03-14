<?php
include "config.php";
$mapel = $_GET['mapel'] ?? "Tidak ada";
?>
<html>
<head>
    <title>Materi - <?= $mapel; ?></title>
</head>
<body>
    <h2>Materi: <?= $mapel; ?></h2>
    <p>
        <?= $materi[$mapel] ?? "Belum ada materi untuk mapel ini."; ?>
    </p>
    <br>
    <a href="materi_list.php">Daftar Semua Materi</a> | 
    <a href="guru_menu.php">Kembali</a>
</body>
</html>
