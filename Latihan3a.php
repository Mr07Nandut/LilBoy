<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan3a</title>

    <style>
        .ganti_style {
            font-size: 28px;
            font-family: Arial;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php

    function ganti_style($tulisan, $kelas)
    {
        return "<span 
        class='$kelas' 
        style = 
        'font-size:28px; 
        font-family: Arial; 
        color: #1A0547; 
        font-style:italic; 
        font-weight:bold;'>

        $tulisan
        
        </span>";
    }

    $tulisan = "Hello World! Here I Come! ";
    $kelas = "ganti-style";

    echo ganti_style($tulisan, $kelas);

    ?>
</body>

</html>