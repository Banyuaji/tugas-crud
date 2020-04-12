<?php
    include('../lib/koneksi.php');
    $nama = $_POST['name'];
    $kategori = $_POST['kategori'];
    $stock = $_POST['stock'];
    $gambar = $_POST['img'];
    // print_r($_POST);
    $result = $con->exec("INSERT INTO `foodstore` VALUES (NULL, '$nama', '$kategori', '$stock', '$gambar')");
    // echo $result;

    if ($result== TRUE) {
        header("location: ../food.php");
    } else {
        echo "gagal";
    }
?>