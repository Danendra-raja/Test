<?php 

include("config.php");


if(isset($_POST['daftar'])) {
    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];
    $sekolah_asal   = $_POST['sekolah_asal'];

    $sql = "INSERT INTO crud (nama,alamat,jenis_kelamin,agama,sekolah_asal)
            VALUE ('$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal')";
    
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }  {
        die("Akses Tersesat....");
    }
} else {
    header('Location: index.php');
}

?>