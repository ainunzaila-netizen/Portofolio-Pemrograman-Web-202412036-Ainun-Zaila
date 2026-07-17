<!DOCTYPE html>
<html>
<head>
    <title>Latihan Fungsi String PHP</title>
</head>
<body>

    <h2>Latihan Fungsi String PHP</h2>

    <?php
    $kalimat = "STITEK Bontang adalah kampus IT terbaik";

    echo "Kalimat Asli: " . $kalimat . "<br><br>";

    echo "Panjang kalimat: " . strlen($kalimat) . "<br>";
    echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";
    echo "Mengganti kata: " . str_replace("terbaik", "favorit", $kalimat) . "<br>";
    echo "Huruf Kapital: " . strtoupper($kalimat);
    ?>

</body>
</html>