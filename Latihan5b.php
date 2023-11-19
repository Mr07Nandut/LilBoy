<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Display</title>
</head>
<body>

<?php
// Buat associative array dengan 5 field data
$dataArray = [
    [
        'nama' => 'M.Julianda al mubarroq',
        'umur' => 19,
        'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'gambar1.jpg',
    ],
    [
      'nama' => 'M.Julianda al mubarroq',
      'umur' => 19,
      'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
      'pekerjaan' => 'Mahasiswa',
      'gambar' => 'gambar1.jpg',
  ],
  [
    'nama' => 'M.Julianda al mubarroq',
    'umur' => 19,
    'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
    'pekerjaan' => 'Mahasiswa',
    'gambar' => 'gambar1.jpg',
],
[
  'nama' => 'M.Julianda al mubarroq',
  'umur' => 19,
  'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'gambar1.jpg',
],
[
  'nama' => 'M.Julianda al mubarroq',
  'umur' => 19,
  'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'gambar1.jpg',
],
[
  'nama' => 'M.Julianda al mubarroq',
  'umur' => 19,
  'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'gambar1.jpg',
],
[
  'nama' => 'M.Julianda al mubarroq',
  'umur' => 19,
  'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'gambar1.jpg',
],
[
  'nama' => 'M.Julianda al mubarroq',
  'umur' => 19,
  'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'gambar1.jpg',
],
[
  'nama' => 'M.Julianda al mubarroq',
  'umur' => 19,
  'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'gambar1.jpg',
],
[
  'nama' => 'M.Julianda al mubarroq',
  'umur' => 19,
  'alamat' => 'Jl.KH.Rozali, Tanjung Raden, Kota Jambi',
  'pekerjaan' => 'Mahasiswa',
  'gambar' => 'gambar1.jpg',
],

];


echo '<table border="1">';
echo '<tr><th>Nama</th><th>Umur</th><th>Alamat</th><th>Pekerjaan</th><th>Gambar</th></tr>';
foreach ($dataArray as $data) {
    echo '<tr>';
    // Tambahkan link pada field 'nama'
    echo '<td><a href="latihan5c.php?' . http_build_query($data) . '">' . $data['nama'] . '</a></td>';
    echo '<td>' . $data['umur'] . '</td>';
    echo '<td>' . $data['alamat'] . '</td>';
    echo '<td>' . $data['pekerjaan'] . '</td>';
    // Tambahkan gambar sesuai kebutuhan
    echo '<td><img src="' . $data['gambar'] . '" alt="Gambar"></td>';
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>
