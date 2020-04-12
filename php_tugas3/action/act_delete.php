<?php
    include('../lib/koneksi.php');
    $key = $_GET['id'];
    $result = $con->exec("DELETE FROM `foodstore` WHERE `id`='$key'");
    if ($result== TRUE) {
        header("location: ../food.php?info=hapus");
    } else {
        echo "gagal";
    }
?>