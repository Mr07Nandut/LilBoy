<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title> Modul 2 - latihan 1 </title>

</head>

<body>

    <table border="1" cellpadding="3" cellspacing="0">

        <tr>

            <th> Kolom 1 </th>
            <th> Kolom 2 </th>
            <th> Kolom 3 </th>
            <th> Kolom 4 </th>
            <th> Kolom 5 </th>

        </tr>

        <?php

        $jb = 15;
        $jk = 5;


        for ($barisJulianda = 1; $barisJulianda <= $jb; $barisJulianda++) {
            echo "<tr>";
            for ($kolomJulianda = 1; $kolomJulianda <= $jk; $kolomJulianda++) {
                echo "<td>Baris $barisJulianda Kolom $kolomJulianda</td>";
            }
            echo "</tr>";
        }

        ?>
        
    </table>

</body>

</html>