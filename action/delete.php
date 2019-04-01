<?php

require "../koneksi.php";

$id = $_GET["id"];

// query sql
$sql = "DELETE FROM mahasiswa WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) OR die(mysqli_error($koneksi));

if(!$query) {
    echo " Error   : ".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);

header("location:../tampil.php");

?>