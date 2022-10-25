<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="list-siswa.css">
</head>
<body>
    <header>
        <h1>STIKOM CKI OKEH</h1>
        <h3>Mahasiswa yang sudah mendaftar</h3>
    </header>
    
    <nav>
        <ul>
            <li><a href="form-daftar.php">Pendaftaran Mahasiswa Baru</a></li>
            <li><a href="index.php">Menu Awal</a></li>
        </ul>
    </nav>

    <br>

    <table border="1" cellpadding="10" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $sql = "SELECT * FROM crud";
            $query = mysqli_query($conn, $sql);
            $i=1;

            // while($siswa = mysqli_fetch_array($query)) {
            //     echo "<tr>";
                
            //     echo "<td>".$i++."</td>";
            //     echo "<td>".$siswa['nama']."</td>";
            //     echo "<td>".$siswa['alamat']."</td>";
            //     echo "<td>".$siswa['jenis_kelamin']."</td>";
            //     echo "<td>".$siswa['agama']."</td>";
            //     echo "<td>".$siswa['sekolah_asal']."</td>";

            //     echo "<td>";
            //     echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            //     echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a> | ";
            //     echo "</td>";

            //     echo "</tr>";
            // }

            foreach ($query as $a) {
                echo "<tr>";
                
                echo "<td>".$i++."</td>";
                echo "<td>".$a['nama']."</td>";
                echo "<td>".$a['alamat']."</td>";
                echo "<td>".$a['jenis_kelamin']."</td>";
                echo "<td>".$a['agama']."</td>";
                echo "<td>".$a['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$a['id']."'>Edit</a>  |";
                echo "<a href='hapus.php?id=".$a['id']."'>Hapus</a> |";
                echo "</td>";

                echo "</tr>";
            }
            ?>
            
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>