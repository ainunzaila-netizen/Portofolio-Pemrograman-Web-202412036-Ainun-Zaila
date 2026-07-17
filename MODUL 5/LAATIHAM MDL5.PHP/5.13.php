<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array PHP</title>
</head>
<body>

    <h2>Daftar Nama Teman Sekelas</h2>

    <?php
    // Indexed Array
    $teman = [
        "Ainun",
        "Andi",
        "Budi",
        "Siti",
        "Rina"
    ];

    // Menampilkan isi array menggunakan foreach
    foreach ($teman as $nama) {
        echo $nama . "<br>";
    }
    ?>

</body>
</html>