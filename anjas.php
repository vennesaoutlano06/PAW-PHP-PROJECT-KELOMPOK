<?php
$anggota = ["Outlano", "George", "Anjas", "Titus", "Tegar"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Halaman Anjas</title>
</head>
<body>
<h1>Daftar Anggota Kelompok</h1>
<table border="1" cellpadding="6">
<tr><th>No</th><th>Nama</th></tr>
<?php foreach ($anggota as $i => $n) { ?>
<tr>
<td><?php echo $i + 1; ?></td>
<td><?php echo $n; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>