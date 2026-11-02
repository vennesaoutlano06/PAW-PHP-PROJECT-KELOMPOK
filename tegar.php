<?php
function sapa($nama) {
return "Halo, " . $nama . "!";
}
function luas_persegi($sisi) {
return $sisi * $sisi;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Halaman Tegar</title>
</head>
<body>
<h1>Fungsi</h1>
<p><?php echo sapa("Tegar"); ?></p>
<p>Luas persegi sisi 5: <?php echo luas_persegi(5); ?></p>
<p>Jumlah huruf "Tegar": <?php echo strlen("Tegar"); ?></p>
<p>Huruf besar: <?php echo strtoupper("tegar"); ?></p>
</body>
</html>