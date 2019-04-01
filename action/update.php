<?php
require "../koneksi.php";

// menangkap data yang di kirim dari form
$nm = $_POST["nama"];
$em = $_POST["email"];
$id = $_POST["id"];

date_default_timezone_get("Asia/Jakarta");

$tgl = date("y:m:d");

// query sql
$sql = "UPDATE mahasiswa 
        SET nama_mhs = '$nm',
        email_mhs    = '$em',
        tanggal      = '$tgl'
        WHERE id     = '$id'";

$query = mysqli_query($koneksi, $sql) or die(mysqli_connect_error());

if (!$query) {
    echo "data tidak berhasil di rubah ! error".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:../tampil.php");

?>