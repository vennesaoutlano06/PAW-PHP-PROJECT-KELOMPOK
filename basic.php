<?php
// Standard Tag
echo "<p>Kalimat ini berasal dari Standard PHP tag </p>";

// Case Insensitive pada Keyword / Function
echo "<p>Hello World</p>";
ECHO "<p>Hello World</p>";
Echo "<p>Hello World</p>";

// Case Sensitive pada Variabel (Menghasilkan Warning / Notice)
$andi = "Andi";
echo $Andi; // Notice: Undefined variable: Andi

// Statement dan Semicolon (Titik Koma)
echo "<p>Hello world</p>";
$a = 3;
$b = 4;
$nama = "Sistem Informasi";
$c = $a / 25.0;

if ($a != $b) {
    echo "<p>Pemrograman Web</p>";
}

// Parse Error jika Semicolon dihilangkan (sengaja di-comment)
// $a = 5 + 7
// echo $a;
?>