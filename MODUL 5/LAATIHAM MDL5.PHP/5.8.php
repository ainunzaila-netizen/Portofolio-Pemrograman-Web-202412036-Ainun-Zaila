<!DOCTYPE html>
<html>
<head>
    <title>Latihan Operator Logika PHP</title>
</head>
<body>

    <h2>Pengecekan Izin Mengemudi</h2>

    <?php
    $umur = 18;
    $sudah_punya_sim = true;

    if ($umur >= 17 && $sudah_punya_sim == true) {
        echo "Anda boleh mengemudi.";
    } else {
        echo "Anda tidak boleh mengemudi.";
    }
    ?>

</body>
</html>