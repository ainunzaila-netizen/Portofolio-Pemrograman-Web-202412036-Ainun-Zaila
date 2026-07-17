<!DOCTYPE html>
<html>
<head>
    <title>Latihan Fungsi PHP</title>
</head>
<body>

    <h2>Latihan Fungsi PHP</h2>

    <?php
    function sapa($nama, $waktu) {
        return "Selamat " . $waktu . ", " . $nama . "!";
    }

    // Memanggil fungsi
    echo sapa("Budi", "Pagi");
    ?>

</body>
</html>