<!DOCTYPE html>
<html>
<head>
    <title>Latihan Switch Statement PHP</title>
</head>
<body>

    <h2>Informasi Ukuran Baju</h2>

    <?php
    $ukuran_baju = "L";

    switch ($ukuran_baju) {
        case "S":
            echo "Ukuran S (Small)";
            break;

        case "M":
            echo "Ukuran M (Medium)";
            break;

        case "L":
            echo "Ukuran L (Large)";
            break;

        case "XL":
            echo "Ukuran XL (Extra Large)";
            break;

        default:
            echo "Ukuran baju tidak tersedia.";
    }
    ?>

</body>
</html>