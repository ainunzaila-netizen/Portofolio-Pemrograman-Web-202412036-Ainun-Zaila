<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        header{
            background:#0d6efd;
            color:white;
            padding:20px;
            text-align:center;
        }

        .container{
            width:90%;
            max-width:700px;
            margin:30px auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#0d6efd;
        }

        label{
            display:block;
            margin-top:15px;
            font-weight:bold;
        }

        input[type=text],
        input[type=email],
        textarea{
            width:100%;
            padding:10px;
            margin-top:5px;
            border:1px solid #ccc;
            border-radius:5px;
            font-size:16px;
        }

        textarea{
            resize:vertical;
        }

        button{
            margin-top:20px;
            width:100%;
            padding:12px;
            border:none;
            border-radius:5px;
            background:#0d6efd;
            color:white;
            font-size:17px;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#084298;
        }

        .error{
            margin-top:20px;
            padding:15px;
            background:#f8d7da;
            color:#842029;
            border-left:5px solid #dc3545;
            border-radius:5px;
        }

        .hasil{
            margin-top:20px;
            padding:20px;
            background:#d1e7dd;
            border-left:5px solid #198754;
            border-radius:5px;
        }

        .hasil h3{
            color:#198754;
            margin-bottom:10px;
        }

        .hasil p{
            margin:8px 0;
        }

        footer{
            margin-top:30px;
            text-align:center;
            color:#666;
            padding:15px;
        }
    </style>
</head>
<body>

<header>
    <h1>Buku Tamu Digital STITEK Bontang</h1>
</header>

<div class="container">

    <h2>Form Buku Tamu</h2>

    <form method="POST" action="">
        <label>Nama Lengkap</label>
        <input type="text" name="nama">

        <label>Alamat Email</label>
        <input type="email" name="email">

        <label>Pesan / Komentar</label>
        <textarea name="pesan" rows="5"></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);
    $pesan = trim($_POST["pesan"]);

    if(empty($nama) || empty($email) || empty($pesan)){

        echo "<div class='error'>";
        echo "<strong>Error!</strong><br>";
        echo "Semua kolom harus diisi.";
        echo "</div>";

    }else{

        $nama = htmlspecialchars($nama);
        $email = htmlspecialchars($email);
        $pesan = htmlspecialchars($pesan);

        echo "<div class='hasil'>";
        echo "<h3>Pesan Berhasil Dikirim</h3>";
        echo "<p><strong>Nama Lengkap :</strong> $nama</p>";
        echo "<p><strong>Alamat Email :</strong> $email</p>";
        echo "<p><strong>Pesan / Komentar :</strong><br>$pesan</p>";
        echo "</div>";

    }

}

?>

</div>

<footer>
    &copy; 2026 Buku Tamu Digital STITEK Bontang | Pemrograman Web
</footer>

</body>
</html>