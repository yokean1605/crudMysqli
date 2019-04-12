<?php

    require "../koneksi.php";

    $nm = $_POST["nama"];
    $em = $_POST["email"];

    date_default_timezone_set("Asia/Jakarta");

    $tgl = date("Y:m:d");

    // query sql
    $sql = "INSERT INTO mahasiswa (nama_mahasiswa, email_mahasiswa, tanggal) VALUES ('$nm','$em','$tgl')";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

    if (!$query) {
        echo "Error : ".$sql."<br>".mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    
    header("location:../index.php");
?>