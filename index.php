<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran CRUD</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head> 
<body>
    <div class="bg">
    <div class="jarak">
    <header>
        <h1>STIKOM CKI OKEH</h1>
        <h3>FORMULIR PENDAFTARAN</h3>
    </header>

    <h4>MENU : </h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Pendaftaran Mahasiswa Baru</a></li>
            <li><a href="list-siswa.php">Mahasiswa baru yang sudah terdaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])) : ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses') {
                        echo "Pendaftaraan Berhasil!";
                    } else {
                        echo"Pendaftaran Gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</div>
</html>