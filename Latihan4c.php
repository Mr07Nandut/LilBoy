<?php 


$negara =[
  "Indonesia"=>"D.K.I. Jakarta", 
  "Singapura"=>"Singapura", 
  "Malaysia"=>" Kuala Lumpur", 
  "Brunei"=>"BandarSeriBegawan", 
  "Thailand" =>"Bangkok",
  "Laos"=>"Vientiane", 
  "Filipina"=>"Manila",
  "Myanmar"=>"Naypydaw" ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Array Associative</title>
</head>
<body>

<h1>
  <b>Daftar Negara ASEAN dan Ibukota : </b>
</h1>

<?php
  foreach($negara as $negari => $namaNegara) :
?>

<li> <?= " $negari : $namaNegara"?> </li>
  
<?php endforeach ?>

</body>
</html>