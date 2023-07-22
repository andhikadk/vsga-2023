<?php

// Menghitung Luas Lingkaran dan menampilkan hasilnya

// Deklarasi dan inisialisasi
$phi = 3.14;
$r = 10;

// Menghitung luas lingkaran
$luas = $phi * $r * $r;

// Menampilkan hasil perhitungan
// echo "Luas lingkaran dengan jari-jari $r = $luas";

// Mengecek bilangan di antara 2 bilangan masukan, apakah sama ataukah lebih besar salah satunya, dan tampilkan hasilnya

// Deklarasi dan inisialisasi
$a = 10;
$b = 5;

// Mengecek bilangan
if ($a == $b) {
  echo "Bilangan $a dan $b sama";
} else if ($a > $b) {
  echo "Bilangan $a lebih besar dari $b";
} else {
  echo "Bilangan $b lebih besar dari $a";
}
