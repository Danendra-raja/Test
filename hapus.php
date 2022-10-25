<?php

include('config.php');

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "DELETE FROM crud WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal Menghapus!");
    }
}

?>