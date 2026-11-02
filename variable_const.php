<?php
// Menampilkan Variabel dan Konstanta
$nama = "Andi";
define("GAJI", 50000000);

echo $nama;
echo "<br>";
echo GAJI;
echo "<br><br>";

// Memanggil Variabel dalam String (Interpolasi String)
$nama = "Andi";
echo "<p>Selamat pagi $nama</p>";

// Menghapus Variabel
$nama = "Andi";
echo $nama;
echo "<br>";

unset($nama);
// echo $nama; // Baris ini di-comment karena variabel $nama sudah dihapus dan akan memicu Notice jika dipanggil
?>