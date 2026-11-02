<?php
$nama = "Titus";
$umur = 20;
$tinggi = 170.5;
$aktif = true;
$a = 10;
$b = 3;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Titus</title>
</head>
<body>
    <h1>Tipe Data dan Operator</h1>
    <p>Nama (string): <?php echo $nama; ?></p>
    <p>Umur (integer): <?php echo $umur; ?></p>
    <p>Tinggi (float): <?php echo $tinggi; ?></p>
    <p>Aktif (boolean): <?php echo $aktif ? "ya" : "tidak"; ?></p>
    <p>10 + 3 = <?php echo $a + $b; ?></p>
    <p>10 * 3 = <?php echo $a * $b; ?></p>
    <p>10 % 3 = <?php echo $a % $b; ?></p>
</body>
</html>
