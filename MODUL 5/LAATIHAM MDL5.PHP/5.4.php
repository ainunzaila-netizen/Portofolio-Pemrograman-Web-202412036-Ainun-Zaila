<!DOCTYPE html>
<html>
<head>
    <title>Latihan Tipe Data PHP</title>
</head>
<body>

    <h2>Latihan Tipe Data PHP</h2>

    <?php
    // Variabel bertipe String
    $nama = "Ainun";

    // Variabel bertipe Integer
    $umur = 20;

    // Variabel bertipe Float
    $ipk = 3.85;

    // Variabel bertipe Boolean
    $mahasiswaAktif = true;

    echo "<h3>Hasil var_dump()</h3>";

    echo "String:<br>";
    var_dump($nama);
    echo "<br><br>";

    echo "Integer:<br>";
    var_dump($umur);
    echo "<br><br>";

    echo "Float:<br>";
    var_dump($ipk);
    echo "<br><br>";

    echo "Boolean:<br>";
    var_dump($mahasiswaAktif);
    ?>

</body>
</html>