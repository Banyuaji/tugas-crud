<?php
include('../lib/koneksi.php');
$key = $_GET['id'];
$result = $con->query("SELECT * FROM `foodstore` WHERE `id`='$key'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Create</title>
</head>

<body>
    <div class="container">
        <br><br>
        <div class="card">
            <h3 class="card-header">Create</h3>
            <div class="card-body">
                <form action="../action/act_edit.php" method="POST">
                    <?php foreach ($result as $d) : ?>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input readonly class="form-control" type="text" name="id" id="" value="<?php echo $d['id']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama makanan</label>
                            <input class="form-control" type="text" name="name" id="" value="<?php echo $d['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">kategori</label>
                            <input class="form-control" type="text" name="kategori" id="" value="<?php echo $d['kategori']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Stock</label>
                            <input class="form-control" type="number" name="stock" id="" value="<?php echo $d['stock']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Gambar</label>
                            <input class="form-control" type="text" name="img" id="" value="<?php echo $d['gambar']; ?>">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Submit">
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>