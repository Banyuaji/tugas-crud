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
                <form action="../action/act_create.php" method="POST">
                    <div class="form-group">
                        <label for="id"><b>ID : Otomatis</b></label>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama makanan</label>
                        <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="name">kategori</label>
                        <input class="form-control" type="text" name="kategori" id="">
                    </div>
                    <div class="form-group">
                        <label for="name">Stock</label>
                        <input class="form-control" type="number" name="stock" id="">
                    </div>
                    <div class="form-group">
                        <label for="name">Gambar</label>
                        <input class="form-control" type="text" name="img" id="">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>