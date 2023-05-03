<?php

$id_matkul = $_GET['id_matkul'];

include "koneksi.php";
$qry = "DELETE FROM matkul WHERE id_matkul = '$id_matkul'";
$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'latihan.php'</script>";
}else{
    echo "Data gagal dihapus";
}