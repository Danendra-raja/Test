<?php 

include("config.php");

if(!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM crud WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1) {
    die("Data Tidak Ada!");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Formulir</title>
    <link rel="stylesheet" type="text/css" href="form-daftar.css">
</head>
<body>
    <header>
        <h1>STIKOM CKI OKEH</h1>
        <h3>Edit Formulir Mahasiswa</h3>
    </header>

    <nav>
        <ul>
            <li><a href="list-siswa.php">Kembali</a></li>
            <li><a href="index.php">Menu Awal</a></li>
        </ul>
    </nav>

    <br>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">

        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" >
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat" placeholder="Alamat Lengkap" value="<?php echo $siswa['alamat'] ?>"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelmain</label>
            <?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="Laki - Laki" <?php echo ($jenis_kelamin == 'Laki - Laki')? "checked": ""?>>Laki - Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jenis_kelamin == 'Perempuan')? "checked": ""?>>Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama : </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'KongHuan') ? "selected": "" ?>>KongHuan</option>
            </select>
        </p>
        <p>
        <label for="sekolah_asal">Nama Sekolah Asal : </label>
        <input type="text" name="sekolah_asal" placeholder="sekolah_asal Lengkap" value="<?php echo $siswa['sekolah_asal'] ?>" > 
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan">
            <input type="reset" value="Batal" name="reset">
        </p>
        </fieldset>
    </form>
</body>
</html>