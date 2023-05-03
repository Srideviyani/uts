<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');

      body{
        font-family: 'Poppins', sans-serif;
      }
    </style>
</head>
<body style="background: #152733;">
    <?php
    $id_nilai_mahasiswa = $_GET['id_nilai_mahasiswa'];
    include "koneksi.php";

    $qry = "SELECT * FROM nilai_mahasiswa WHERE id_nilai_mahasiswa = '$id_nilai_mahasiswa'";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

    ?>
    <div class="container">
        <div class="row align-items-center vh-100">
            <div>
                <div class="col-md-8 mx-auto px-4 py-5" style="border: 2px solid white;border-radius: 10px;">
                <div class="text-white pb-4">
                    <h1 class="h4 fw-bold">Form Edit Jurusan</h1>
                </div>
                <form action="update-nilaimhs.php" method="POST" class="text-white">
                <div class="row">
                          <div class="col-md-6">
                          <input type="text" name="id_nilai_mahasiswa" value="<?= $data['id_nilai_mahasiswa'] ?>" hidden>
                            <label class="form-label">Mahasiswa</label>
                              <select name="nim" class="form-select">
                                <?php
                                $qry3 = "SELECT * FROM mahasiswa";
                                $exec3 = mysqli_query($con, $qry3);
                                $no=1;
                                while($list_mahasiswa = mysqli_fetch_assoc($exec3)){
                                ?>
                                  <option value="<?= $list_mahasiswa['nim'] ?>" <?php if($list_mahasiswa['nim'] == $data['nim']) { echo "selected"; }?>><?= $list_mahasiswa['nim'] ?> - <?= $list_mahasiswa['nama_mhs'] ?></option>
                                <?php } ?> 
                              </select>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label">Mata kuliah</label>
                            <select name="id_jurusan" class="form-select">
                              <?php
                              $qry4 = "SELECT * FROM matkul";
                              $exec4 = mysqli_query($con, $qry4);
                              $no=1;
                              while($list_matkul = mysqli_fetch_assoc($exec4)){
                              ?>
                                <option value="<?= $list_matkul['id_matkul'] ?>" <?php if($list_matkul['id_matkul'] == $data['id_jurusan']) { echo "selected"; }?>><?= $list_matkul['nama_matkul'] ?></option>
                              <?php } ?> 
                            </select>
                          </div>
                        </div>
                        <div class="row row-cols-3 pt-4">
                          <div class="col">
                            <label class="form-label">Jumlah Kehadiran</label>
                            <input type="number" name="jmlh_kehadiran" class="form-control" value="<?= $data['jmlh_kehadiran'] ?>">
                          </div>
                          <div class="col">
                            <label class="form-label">Jumlah Pertemuan</label>
                            <input type="number" name="jmlh_pertemuan" class="form-control" value="<?= $data['jmlh_pertemuan'] ?>">
                          </div>
                          <div class="col">
                            <label class="form-label">Nilai Tugas</label>
                            <input type="number" name="nilai_tugas" class="form-control" value="<?= $data['nilai_tugas'] ?>">
                          </div>
                          <div class="col">
                            <label class="form-label">Nilai UTS</label>
                            <input type="number" name="nilai_uts" class="form-control" value="<?= $data['nilai_uts'] ?>">
                          </div>
                          <div class="col">
                            <label class="form-label">Nilai UAS</label>
                            <input type="number" name="nilai_uas" class="form-control" value="<?= $data['nilai_uas'] ?>">
                          </div>
                        </div>
                    <div>
                        <input type="submit" value="simpan" class="btn btn-secondary mt-3">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>