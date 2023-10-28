<?php 

function pangkat($angka, $pangkat) {
  return "$angka pangkat $pangkat = " . pow($angka, $pangkat);
}

// Menggunakan fungsi pangkat
$angka = 5;
$pangkat = 4;
$hasil = pangkat($angka, $pangkat);
echo $hasil;


?>