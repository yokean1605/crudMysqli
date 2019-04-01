<?php
    require "koneksi.php";
    // query sql
    $sql = "SELECT * FROM mahasiswa ORDER BY id DESC";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error());
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body>
    <div class="app mt-4">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3 class="mb-5">Tampil data</h3>
                    <table class="table table-hovered">
                        <thead>
                            <tr>
                                <td>
                                    Nomor
                                </td>
                                <td>
                                   Nama Mahasiswa 
                                </td>
                                <td>
                                    Email Mahasiswa
                                </td>
                                <td>
                                    Tanggal
                                </td>
                                <td>
                                    Aksi
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data["nama_mhs"];?></td>
                                    <td><?=$data["email_mhs"];?></td>
                                    <td><?=$data["tanggal"];?></td>
                                    <td>
                                        <a href="ubah.php?id=<?=$data["id"]?>" class="btn btn-warning">Rubah</a>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>