<?php

$id_matkul = $_POST['id_matkul'];
$nama_matkul = $_POST['nama_matkul'];
$jumlah_sks = $_POST['jumlah_sks'];

include "koneksi.php";

$qry = "UPDATE matkul SET 
        nama_matkul = '$nama_matkul',
        jumlah_sks = '$jumlah_sks'
        WHERE id_matkul = '$id_matkul'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}