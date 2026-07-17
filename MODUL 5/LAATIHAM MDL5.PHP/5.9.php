<!DOCTYPE html>
<html>
<head>
    <title>Latihan If Statement PHP</title>
</head>
<body>

    <h2>Pengecekan Bilangan</h2>

    <?php
    $angka = -10;

    if ($angka > 0) {
        echo "Angka " . $angka . " adalah bilangan positif.";
    } elseif ($angka < 0) {
        echo "Angka " . $angka . " adalah bilangan negatif.";
    } else {
        echo "Angka tersebut adalah nol.";
    }
    ?>

</body>
</html>