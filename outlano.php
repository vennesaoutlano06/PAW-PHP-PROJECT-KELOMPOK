<?php
define("KAMPUS", "Telkom University Surabaya");
const MATA_KULIAH = "Pengembangan Aplikasi Web";
$nama = "Outlano";
$branch = "outlano";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Outlano</title>
</head>
<body>
    <h1>Variabel dan Konstanta</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Branch: <?php echo $branch; ?></p>
    <p>Kampus: <?php echo KAMPUS; ?></p>
    <p>Mata kuliah: <?php echo MATA_KULIAH; ?></p>
</body>
</html>