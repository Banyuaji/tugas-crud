<?php
include('lib/koneksi.php');
$result = $con->query('SELECT * FROM `foodstore`');

if (isset($_GET['info'])) {
    $info = $_GET['info'];
    if ($info == 'hapus') {
        echo '<script> alert("Data berhasil terhapus"); </script>';
        // echo 'berhasil dihapus';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Kedai-A</title>
</head>
<style>
    .red {
        background-color: #d63031;
        border-radius: 5px;
        color: #dfe6e9;
    }

    img {
        width: 75px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="container">
        <br><br>
        <div class="card">
            <h3 class="card-header">Data makanan</h3>
            <div class="card-body">
                <table class="table" align="center">
                    <thead>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Ketegori</th>
                        <th>Stock</th>
                        <th width="15%">Gambar</th>
                        <th width="10%">Action</th>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach ($result as $d) :
                        ?>
                            <tr>
                                <td>
                                    <?php
                                        echo $i++;
                                    ?>
                                </td>
                                <td><?php echo $d['nama'] ?></td>
                                <td><?php echo $d['kategori'] ?></td>
                                <?php
                                if ($d['stock'] <= 5) {
                                    echo '<td class="red">' . $d['stock'] . '</td>';
                                } else {
                                    echo '<td>' . $d['stock'] . '</td>';
                                }
                                ?>
                                <td><?php echo "<img src='" . $d['gambar'] . "'>" ?></td>
                                <td><a class="btn btn-danger" href="action/act_delete.php?id=<?php echo $d['id'] ?>">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td><a class="btn btn-success" href="crud/create.php">Tambah</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>