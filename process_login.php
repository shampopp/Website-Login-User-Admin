<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'] ?? '';
    if ($role === 'guru') {
        header("Location: guru_menu.php");
    } elseif ($role === 'siswa') {
        header("Location: siswa_menu.php");
    } else {
        header("Location: index.php");
    }
    exit();
}
?>
