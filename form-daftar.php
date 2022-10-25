<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="form-daftar.css">
</head>
<body>
    <header>
        <h1>STIKOM CKI OKEH</h1>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
    </header>

    <nav>
        <ul>
            <li><a href="list-siswa.php">Mahasiswa baru yang sudah terdaftar</a></li>
            <li><a href="index.php">Menu Awal</a></li>
        </ul>
    </nav>

    <br>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap">
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat" placeholder="Alamat Lengkap"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <label><input type="radio" name="jenis_kelamin" value="Laki - Laki">Laki - Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
        </p>
        <p>
            <label for="Agama">Agama : </label>
            <select name="agama">
                <option>---Pilih Agama---</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>KongHuan</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal : </label>
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah">
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar">
            <input type="reset" value="Batal" name="reset">
        </p>
        </fieldset>
    </form>
</body>
</html>