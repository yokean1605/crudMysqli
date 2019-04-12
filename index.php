<?php
require "koneksi.php";
// query sql
// $sql = "SELECT * FROM mahasiswa ORDER BY id DESC";
// $query = mysqli_query($koneksi, $sql) or die(mysqli_error());

// pagination
$limit = 5;
$halaman = @$_GET['page'];
if (empty($halaman)) {
    $posisi = 0;
    $halaman = 1;
} else {
    $posisi = ($halaman-1) * $limit;
}

// langkah 1 sesuaikan query dengan posisi dan batas
$query      = "SELECT * from mahasiswa LIMIT $posisi, $limit";
$tampil     = mysqli_query($koneksi, $query) or die(mysqli_errno());
$no         = $posisi+1;

$query2     = mysqli_query($koneksi, "select * from mahasiswa");
$jmlData    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmlData/$limit);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="app mt-4">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3 class="mb-5">Tampil data</h3>
                    <a href="create.php" class="btn btn-primary mb-4">Tambah Data</a>
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
                                while ($data = mysqli_fetch_array($tampil)) {
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data["nama_mahasiswa"]?></td>
                                <td><?=$data["email_mahasiswa"]?></td>
                                <td><?=$data["Tanggal"]?></td>
                                <td>
                                    <a href="ubah.php?id=<?= $data["id"] ?>" class="btn btn-warning btn-sm">Rubah</a>
                                    <a href="action/delete.php?id=<?= $data["id"] ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                            }
                        ?>
                        </tbody>
                    </table>
                    <?php
                        for ($i=0; $i <= $jmlhalaman ; $i++)
                        if ($i != $halaman) {
                            echo "<a href=\"index.php?page=$i\" >$i</a> | ";
                        } else {
                            echo "<b>$i</b> | ";
                        }
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html> 