<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Modul 2 - Latihan 1 </title>
    <style>
        .kotak {
            border: 3px solid blueviolet;
            padding: 10px;
            margin: 10px;
            width: 30%;
        }


        .clear {
            border: 3px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="kotak">

        <?php
        for ($mjulianda_al_mubarroq = 1; $mjulianda_al_mubarroq <= 5; $mjulianda_al_mubarroq++) {
            for ($julianda = 1; $julianda <= $mjulianda_al_mubarroq; $julianda++) {
                echo "<div class='clear'>" . $julianda . "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>
    
    <br>

    <p>
        <i>
            *note: jika variabel memanjang kebawah, mohon di zoom out
            karena desain website ini tidak responsif, Terimakasih.
        </i>
    </p>
    
</body>

</html>