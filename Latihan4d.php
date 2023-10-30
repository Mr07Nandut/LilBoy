<?php 

$negara =[ 
  [
  "Indonesia"=>"D.K.I. Jakarta", 
  "Singapura"=>"Singapura", 
  "Malaysia"=>" Kuala Lumpur", 
  "Brunei"=>"BandarSeriBegawan", 
  "Thailand" =>"Bangkok",
  "Laos"=>"Vientiane", 
  "Filipina"=>"Manila",
  "Myanmar"=>"Naypydaw" 
  ],
  [
    "+62"
  ]

];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title> Modul 2 - latihan 1 </title>

</head>

<body>

<?php
$asean_array = [
    ["Negara" => "Indonesia", "Ibu Kota" => "Jakarta", "Kode Telepon" => "+62", "Makanan Khas" => "Nasi Goreng", "Harga" => "Rp. 25.000"],
    ["Negara" => "Singapura", "Ibu Kota" => "Singapura", "Kode Telepon" => "+65", "Makanan Khas" => "Hainanese Chicken Rice", "Harga" => "SGD(Singapore Dollar) 5"],
    ["Negara" => "Malaysia", "Ibu Kota" => "Kuala Lumpur", "Kode Telepon" => "+60", "Makanan Khas" => "Nasi Lemak", "Harga" => "MYR(Malaysian Ringgit) 10"],
    ["Negara" => "Brunei", "Ibu Kota" => "Bandar Seri Begawan", "Kode Telepon" => "+673", "Makanan Khas" => "Ambuyat", "Harga" => "BND(Brunei Dollar ) 10"],
    ["Negara" => "Thailand", "Ibu Kota" => "Bangkok", "Kode Telepon" => "+66", "Makanan Khas" => "Pad Thai", "Harga" => "THB(Thai Baht) 50"],
    ["Negara" => "Laos", "Ibu Kota" => "Vientiane", "Kode Telepon" => "+856", "Makanan Khas" => "Larb", "Harga" => "LAK(Lao Kip) 20,000"],
    ["Negara" => "Filipina", "Ibu Kota" => "Manila", "Kode Telepon" => "+63", "Makanan Khas" => "Adobo", "Harga" => "PHP(Philippine Peso) 150"],
    ["Negara" => "Myanmar", "Ibu Kota" => "Naypyidaw", "Kode Telepon" => "+95", "Makanan Khas" => "Mohinga", "Harga" => "MMK(Myanmar Kyat) 2,000"]
];
?>

<table border="1">
    <tr>
        <th>Negara</th>
        <th>Ibu Kota</th>
        <th>Kode Telepon</th>
        <th>Makanan Khas</th>
        <th>Harga</th>
    </tr>
    <?php foreach ($asean_array as $negara): ?>
    <tr>
        <td><?php echo $negara["Negara"]; ?></td>
        <td><?php echo $negara["Ibu Kota"]; ?></td>
        <td><?php echo $negara["Kode Telepon"]; ?></td>
        <td><?php echo $negara["Makanan Khas"]; ?></td>
        <td><?php echo $negara["Harga"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>


</body>

</html>