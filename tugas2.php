<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
          background-color: #ccc;
        }
    </style>
</head>
<body>
  <h1>
    <b>Tugas M.Julianda al mubarroq (701220008)</b>
      </h1>
    <?php
    $NIM = 701220008;
    $tigaDigitTerakhir = substr($NIM, -3);
    $kategori = $tigaDigitTerakhir % 5;

    $data = array(
        "1" => array(
            array("Pura Ulun Danu Bratan", "Tangkuban Perahu", "Danau Toba", "Tana Toraja", "Pantai Pink", "Pulau Raja Ampat", "Candi Borobudur", "Gunung Kapur Benculuk", "Pulau Komodo", "Tarian Piring"),
            array("Bali", "Jawa Barat", "Sumatera Selatan", "Sulawesi Tenggara", "Kalimantan Timur", "Papua", "Jawa Tengah", "Kalimantan Barat", "Nusa Tenggara Timur", "Maluku"),
            array("assets/bali.jpg", "assets/jawabarat.jpg", "assets/sumsel.jpg", "assets/sulteng.jpg", "assets/kaltim.jpg", "assets/papua.jpg", "assets/jawatengah.jpg", "assets/kalbar.jpg", "assets/ntt.jpg", "assets/maluku.jpg"),
            array("Hindu", "Hindu", "Batak", "Toraja", "Tangkuban Perahu", "Papua", "Buddha", "Hindu", "Hindu", "Minangkabau"),
            array("Danau", "Gunung Berapi", "Danau", "Budaya", "Pantai", "Laut", "Candi", "Gunung Kapur", "Pulau", "Tarian")
        ),
        "2" => array(
            array("Isaac Newton", "Albert Einstein", "Leonardo da Vinci", "Marie Curie", "Galileo Galilei", "Charles Darwin", "Thomas Edison", "Alexander Graham Bell", "Nikola Tesla", "Wright Bersaudara"),
            array("Fisikawan dan Matematikawan", "Fisikawan Teoretis", "Polymath", "Fisikawan dan Kimiawan Polandia", "Astronom Italia", "Naturalis dan Geologis", "Penemu dan Ilmuwan Fisika", "Ilmuwan dan Inventor", "Fisikawan dan Inventor", "Astronom dan Penemu"),
            array("assets/newton.jpg", "assets/einstein.jpg", "assets/davinci.jpg", "assets/curie.jpg", "assets/galilei.jpg", "assets/darwin.jpg", "assets/edison.jpg", "assets/bell.jpg", "assets/tesla.jpg", "assets/wright.jpg"),
            array("Inggris", "Jerman", "Italia", "Polandia", "Italia", "Inggris", "Amerika Serikat", "Skotlandia", "Amerika Serikat", "Amerika Serikat"),
            array("Ilmuwan Fisika", "Ilmuwan Fisika", "Polymath", "Ilmuwan Kimia", "Astronom", "Naturalis dan Geologis", "Penemu dan Ilmuwan Fisika", "Ilmuwan dan Inventor", "Ilmuwan dan Inventor", "Astronom")
        ),
        "3" => array(
            array("Harimau Sumatera", "Orangutan", "Komodo", "Badak Jawa", "Gajah Sumatera", "Burung Jalak Bali", "Kakapo", "Kondor California", "Paus Orca", "Lumba-Lumba Vaquita"),
            array("Mamalia Karnivora", "Mamalia Omnivora", "Reptil", "Mamalia Herbivora", "Mamalia Herbivora", "Omnivora", "Herbivora", "Omnivora", "Karnivora", "Mamlia Karnivora"),
            array("harimausumatera.jpeg", "orangutan.jpeg", "komodo.jpeg", "badakjawa.jpeg", "gajahsumatera.jpeg", "jalakbali.jpeg", "kakapo.jpeg", "kondor.jpeg", "pausorca.jpeg", "lumba2vaquita.jpeg"),
            array("Asia", "Asia", "Indonesia", "Indonesia", "Asia", "Indonesia", "Selandia Baru", "Amerika Utara", "Seluruh Dunia", "Seluruh Dunia"),
            array("Hutan", "Hutan Hujan Tropis", "Pulau", "Hutan", "Padang Rumput", "Hutan Mangrove", "Hutan Hujan Tropis", "Gunung", "Laut", "Laut")
        ),
        "4" => array(
            array("Soekarno", "Hatta", "Fatmawati", "Sudirman", "Kartini", "Gatot Subroto", "Cut Nyak Dien", "Diponegoro", "Ki Hadjar Dewantara", "Teuku Umar"),
            array("Presiden Pertama RI", "Wakil Presiden Pertama RI", "Ibu Negara RI", "Jenderal Besar", "Pahlawan Emansipasi Wanita", "Pahlawan Nasional", "Pahlawan Nasional", "Pangeran Diponegoro", "Pendidik dan Pahlawan Nasional", "Pahlawan Nasional"),
            array("assets/soekarno.jpg", "assets/hatta.jpg", "assets/fatmawati.jpg", "assets/sudirman.jpg", "assets/kartini.jpg", "assets/gatotsubroto.jpg", "assets/cutnyakdien.jpg", "assets/diponegoro.jpg", "assets/dewantara.jpg", "assets/teukuumar.jpg"),
            array("Indonesia", "Indonesia", "Indonesia", "Indonesia", "Indonesia", "Indonesia", "Indonesia", "Indonesia", "Indonesia", "Indonesia"),
            array("Politikus", "Politikus", "Pahlawan Nasional", "Jenderal Besar", "Pahlawan Emansipasi Wanita", "Pahlawan Nasional", "Pahlawan Nasional", "Pangeran Diponegoro", "Pendidik dan Pahlawan Nasional", "Pahlawan Nasional")
        ),
        "0" => array(
            array("Apple", "Google", "Microsoft", "Amazon", "Facebook", "Tesla", "Alibaba", "Netflix", "Adobe", "Twitter"),
            array("Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi"),
            array("assets/apple.jpg", "assets/google.jpg", "assets/microsoft.jpg", "assets/amazon.jpg", "assets/facebook.jpg", "assets/tesla.jpg", "assets/alibaba.jpg", "assets/netflix.jpg", "assets/adobe.jpg", "assets/twitter.jpg"),
            array("Amerika Serikat", "Amerika Serikat", "Amerika Serikat", "Amerika Serikat", "Amerika Serikat", "Amerika Serikat", "China", "Amerika Serikat", "Amerika Serikat", "Amerika Serikat"),
            array("Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi", "Perusahaan Teknologi")
        )
    );

    $seluruh_data = $data["$kategori"];
    $kategori_kategori = array(
      "1" => "Budaya Daerah di Indonesia",
      "2" => "Penemu-penemu terkenal di dunia",
      "3" => "Flora dan Fauna terancam punah",
      "4" => "Pahlawan Nasional Indonesia",
      "0" => "Perusahaan Teknologi"
  );

    echo "<h2>Kategori: " . $kategori_kategori["$kategori"] . "</h2>";

    echo "<table>";
    echo "<tr><th>Nama</th><th>Keterangan</th><th>Gambar</th><th>Asal Hewan</th><th>Habitat</th></tr>";
    
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        echo "<td>" . $seluruh_data[0][$i] . "</td>";
        echo "<td>" . $seluruh_data[1][$i] . "</td>";
        echo "<td><img src='" . $seluruh_data[2][$i] . "' alt='" . $seluruh_data[0][$i] . "' width='100' height='100'></td>";
        echo "<td>" . $seluruh_data[3][$i] . "</td>";
        echo "<td>" . $seluruh_data[4][$i] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>
