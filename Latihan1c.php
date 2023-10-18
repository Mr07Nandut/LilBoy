<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 1c</title>

    <style>
    
        .outbox {
            border: 3px solid blueviolet;
            padding: 10px;
            margin: 10px;
            width: 30%;
        }


        .box {
            display: inline-block;
            border: 3px solid black;
            width: 40px;
            height: 40px;
            font-size: 20px;
            margin: 10px;
            padding: 10px;
            text-align: center;
            margin-right: 5px;
            margin-bottom: 10px;

        }

    </style>

</head>

<body>

    <div class="outbox">

        <?php
        $a = "A";
        $b = "B";
        $c = "C";
        ?>

        <div class="box">
            <?= $a; ?>
        </div>
        <br>
        <div class="box">
            <?= $a; ?>
        </div>

        <div class="box">
            <?= $b; ?>
        </div>
        <br>
        <div class="box">
            <?= $a; ?>
        </div>
        <div class="box">
            <?= $b; ?>
        </div>
        <div class="box">
            <?= $c; ?>
        </div>
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