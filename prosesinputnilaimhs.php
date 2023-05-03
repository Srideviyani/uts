<?php
$nim = $_POST['nim'];
$id_jurusan = $_POST['id_jurusan'];
$jmlh_kehadiran = $_POST['jmlh_kehadiran'];
$jmlh_pertemuan = $_POST['jmlh_pertemuan'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

include "koneksi.php";

$qry = "INSERT INTO nilai_mahasiswa VALUES (
    '', '$nim', '$id_jurusan', '$jmlh_kehadiran', '$jmlh_pertemuan', '$nilai_tugas', '$nilai_uts', '$nilai_uas'
)";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}