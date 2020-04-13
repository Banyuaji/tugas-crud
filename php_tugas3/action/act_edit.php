<?php
    include('../lib/koneksi.php');
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $kategori = $_POST['kategori'];
    $stock = $_POST['stock'];
    $gambar = $_POST['img'];
    // print_r($_POST);
    $result = $con->query("UPDATE `foodstore` SET `nama` = '$nama',
        `kategori` = '$kategori',
        `stock` = '$stock',
        `gambar` = '$gambar' WHERE  `id` = '$id'");

    if ($result== TRUE) {
        header("location: ../food.php");
    } else {
        echo "gagal";
    }
