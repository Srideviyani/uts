<?php
$id_nilai_mahasiswa  = $_POST['id_nilai_mahasiswa '];
$nim = $_POST['nim'];
$id_jurusan = $_POST['id_jurusan'];
$jmlh_kehadiran = $_POST['jmlh_kehadiran'];
$jmlh_pertemuan = $_POST['jmlh_pertemuan'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

include "koneksi.php";

$qry = "UPDATE nilai_mahasiswa SET 
        nim = '$nim',
        id_jurusan = '$id_jurusan',
        jmlh_kehadiran = '$jmlh_kehadiran',
        jmlh_pertemuan = '$jmlh_pertemuan',
        nilai_tugas = '$nilai_tugas',
        nilai_uts = '$nilai_uts',
        nilai_uas = '$nilai_uas'
        WHERE id_nilai_mahasiswa = '$id_nilai_mahasiswa'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}