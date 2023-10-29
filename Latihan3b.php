<?php

$jawabanIsset = " Isset adalah = ";
$jawabanEmpty = " Empty adalah = ";

function soal() {

    global $jawabanIsset;
    global $jawabanEmpty;

    $julianda = 1;

    if ($julianda < 2) {
        echo $jawabanIsset . "<li>fungsi yang digunakan untuk memeriksa apakah suatu variabel telah diatur dan bukan null</li>
        <li>Jika variabel ada dan memiliki nilai, maka isset() akan mengembalikan true, sebaliknya, jika variabel tidak ada atau memiliki nilai null, maka akan mengembalikan false</li><br> 
        " . $jawabanEmpty . "<li>fungsi yang digunakan untuk memeriksa apakah suatu variabel kosong atau tidak memiliki nilai yang dianggap tidak ada</li>
        <li>Variabel dianggap kosong jika salah satu dari kondisi berikut terpenuhi:</li><br> 
        <li>Tidak diatur atau tidak ada</li><br> 
        <li>Memiliki nilai nol (0)</li><br> 
        <li>Memiliki string kosong (''atau '0').</li><br> 
        <li>Memiliki nilai boolean false.</li><br> 
        <li>Memiliki nilai null</li><br>";
    }
}

soal();


echo"<br>";

echo"<b>CONTOH :</b>";

echo"<br>";

function cekVariabel($var, $nama) {
    echo "Apakah variabel '$nama' terdefinisi? " . (isset($var) ? "Ya" : "Tidak");
    echo "<br>";
    echo "Apakah variabel '$nama' kosong? " . (empty($var) ? "Ya" : "Tidak");
    echo "<br><br>";
}



$nama = "John Doe";
$umur;

cekVariabel($nama, 'nama');
cekVariabel($umur, 'umur');
cekVariabel($alamat, 'alamat');
echo"<b>Warning/Error yang ditamplikan diatas adalah bukti bahwa sebuah variabel tidak terdefinisi</b>";

?>

