<?php 
$negara =["Indonesia", " Singapura", "Malaysia", "Brunei", "Thailand" ];

$hasil = array_push($negara, "Laos", "Filipina", "Myanmar");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Looping Foreach Array</title>
</head>

<body>

<h1>
  <b>Daftar Negara ASEAN awal : </b>
</h1>

<br>

<?php 
for ($i = 0 ; $i <= 4; $i++){
  echo "<li> $negara[$i]</li> "; 
  }
?>
<br>
<h2><b>Daftar Negara ASEAN awal : </b></h2>
<br>
<?php
  foreach($negara as $negari => $namaNegara) :?>

<li><?php echo "$namaNegara"?></li>
  
  <?php endforeach ?>
</body>
</html>