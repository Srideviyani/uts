<?php

$id_nilai_mahasiswa = $_GET['id_nilai_mahasiswa'];

include "koneksi.php";
$qry = "DELETE FROM nilai_mahasiswa WHERE id_nilai_mahasiswa = '$id_nilai_mahasiswa'";
$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php'</script>";
}else{
    echo "Data gagal dihapus";
}