<?php
$nilai = 85;
if ($nilai >= 80) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} else {
    $grade = "C";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman George</title>
</head>
<body>
    <h1>Struktur Kontrol</h1>
    <p>Nilai: <?php echo $nilai; ?> (Grade <?php echo $grade; ?>)</p>
    <ul>
        <?php for ($i = 1; $i <= 5; $i++) { echo "<li>Perulangan ke-$i</li>"; } ?>
    </ul>
</body>
</html>