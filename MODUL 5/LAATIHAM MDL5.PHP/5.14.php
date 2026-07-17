<!DOCTYPE html>
<html>
<head>
    <title>Latihan Superglobals GET</title>
</head>
<body>

    <h2>Form Menggunakan Method GET</h2>

    <form method="get" action="14_superglobals.php">
        Nama:
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <br>

    <?php
    if (isset($_GET['nama'])) {
        $nama = htmlspecialchars($_GET['nama']);
        echo "Halo, " . $nama . "!";
    }
    ?>

</body>
</html>