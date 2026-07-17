<!DOCTYPE html>
<html>
<head>
    <title>Latihan Perulangan PHP</title>
</head>
<body>

    <h2>Contoh Perulangan For dan While</h2>

    <?php
    // Perulangan for
    for ($i = 0; $i < 5; $i++) {
        echo "Perulangan ke-" . ($i + 1) . "<br>";
    }

    echo "<br>";

    // Perulangan while
    $angka = 5;

    while ($angka > 0) {
        echo "Hitung mundur: $angka <br>";
        $angka--;
    }
    ?>

</body>
</html>