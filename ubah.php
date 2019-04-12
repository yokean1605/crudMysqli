<?php
require "koneksi.php";
$ide   = $_GET["id"];
$sql   = "SELECT * FROM mahasiswa WHERE id = '$ide'";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="col-8">
            <h3 class="font-weight-bold mb-4">Ubah Data</h3>
            <form action="action/update.php" method="post">
                <input type="text" name="id" hidden value="<?=$data["id"]?>">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="nama" id="name" class="form-control" value="<?=$data["nama_mhs"]?>">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?=$data["email_mhs"]?>">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html> 