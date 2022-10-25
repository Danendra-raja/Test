<?php 

include("config.php");


if(isset($_POST['simpan'])) {
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];
    $sekolah_asal   = $_POST['sekolah_asal'];

    $sql = "UPDATE crud SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',sekolah_asal='$sekolah_asal' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: list-siswa.php');
    } else {
        header('Location: index.php?status=gagal');
    }  {
        die("Akses Tersesat....");
    }
}

?>
