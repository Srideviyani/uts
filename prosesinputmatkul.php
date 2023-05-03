<?php
$nama_matkul = $_POST['nama_matkul'];
$jumlah_sks = $_POST['jumlah_sks'];

include "koneksi.php";

$qry = "INSERT INTO matkul VALUES (
    '', '$nama_matkul', '$jumlah_sks'
)";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}