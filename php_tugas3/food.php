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
                        <th width="20%">Gambar</th>
                        <th width="20%">Action</th>
                    </thead>
                    <tbody>
                        <?php
                        include('lib/koneksi.php');
                        $result = $con->query('SELECT * FROM `foodstore`');
                        foreach ($result as $d) {
                            echo '<tr>';
                            echo '<td>' . $d['id'] . '</td>';
                            echo '<td>' . $d['nama'] . '</td>';
                            echo '<td>' . $d['kategori'] . '</td>';
                            echo '<td>' . $d['stock'] . '</td>';
                            echo '<td>' . $d['gambar'] . '</td>';
                            // echo '';
                            echo '</tr>';
                        }
                        ?>
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