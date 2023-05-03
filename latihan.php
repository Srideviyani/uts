<?php
include "koneksi.php";
?>
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

      body {
        font-family: 'Poppins', sans-serif;
      }
    </style>
  </head>
  <body style="background: #152733;">
    <section>
      <div class="container">
        <div class="row align-items-center vh-100">
          <div>
            <div class="px-4 py-5" style="border: 2px solid white;border-radius: 10px;">
              <div class="text-white pb-4 text-white">
                <h1 class="h4 fw-bold">Form Data Mahasiswa</h1>
                <h2 class="h5">Update biodata dengan benar</h2>
              </div>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Input Data Mahasiswa </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModaljurusan"> Input Data Jurusan </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalmatkul"> Input Data Mata Kuliah </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalnilaimahasiswa"> Input Nilai Mahasiswa </button>
              <!-- Modal mahasiswa -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Mahasiswa</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="proses.php" method="POST">
                        <div class="row">
                          <div class="col-md-6">
                            <label class="form-label">Nama mahasiswa</label>
                            <input type="text" name="nama" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label">Email</label>
                            </br>
                            <input type="email" name="email" class="form-control">
                          </div>
                          <div class="col"></div>
                        </div>
                        <div class="row pt-4">
                          <div class="col-md-6">
                            <label class="form-label">NIM (Nomor induk mahasiswa)</label>
                            <input type="number" name="nim" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label">Jurusan</label>
                            <select name="jurusan" class="form-select">
                            <?php
                            $qry1 = "SELECT * FROM jurusan";
                            $exec1 = mysqli_query($con, $qry1);
                            $no=1;
                            while($jurusan = mysqli_fetch_assoc($exec1)){
                            ?>
                              <option value="<?= $jurusan['id_jurusan'] ?>"><?= $jurusan['nama_jurusan'] ?></option>
                            <?php } ?> 
                            </select>
                          </div>
                        </div>
                        <div class="row pt-4">
                          <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            </br>
                            <input type="radio" name="gender" value="1" class="form-check-input"> laki-laki <input type="radio" name="gender" value="2" class="form-check-input"> Perempuan
                          </div>
                          <div class="col-md-6">
                            <label class="form-label">No. HP</label>
                            </br>
                            <input type="number" name="nohp" class="form-control">
                          </div>
                        </div>
                        <div class="pt-2">
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="alamat"></textarea>
                            <label for="floatingTextarea">Alamat</label>
                          </div>
                        </div>
                        <div>
                          <input type="submit" value="simpan" class="btn btn-primary mt-3">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal jurusan -->
              <div class="modal fade" id="exampleModaljurusan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Jurusan</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="prosesinputjurusan.php" method="POST">
                        <div class="row">
                          <div class="col-md-12">
                            <label class="form-label">Nama Jurusan</label>
                            <input type="text" name="nama_jurusan" class="form-control">
                          </div>
                        </div>
                        <div>
                          <input type="submit" value="simpan" class="btn btn-primary mt-3">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal jurusan -->
              <div class="modal fade" id="exampleModalmatkul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Jurusan</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="prosesinputmatkul.php" method="POST">
                        <div class="row">
                          <div class="col-md-6">
                            <label class="form-label">Nama Mata kuliah</label>
                            <input type="text" name="nama_matkul" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label">Jumlah Sks</label>
                            <input type="number" name="jumlah_sks" class="form-control">
                          </div>
                        </div>
                        <div>
                          <input type="submit" value="simpan" class="btn btn-primary mt-3">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal jurusan -->
              <div class="modal fade" id="exampleModalnilaimahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Input Nilai Mahasiswa</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="prosesinputnilaimhs.php" method="POST">
                        <div class="row">
                          <div class="col-md-6">
                            <label class="form-label">Mahasiswa</label>
                              <select name="nim" class="form-select">
                                <?php
                                $qry3 = "SELECT * FROM mahasiswa";
                                $exec3 = mysqli_query($con, $qry3);
                                $no=1;
                                while($list_mahasiswa = mysqli_fetch_assoc($exec3)){
                                ?>
                                  <option value="<?= $list_mahasiswa['nim'] ?>"><?= $list_mahasiswa['nim'] ?> - <?= $list_mahasiswa['nama_mhs'] ?></option>
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
                                <option value="<?= $list_matkul['id_matkul'] ?>"><?= $list_matkul['nama_matkul'] ?></option>
                              <?php } ?> 
                            </select>
                          </div>
                        </div>
                        <div class="row row-cols-3 pt-4">
                          <div class="col">
                            <label class="form-label">Jumlah Kehadiran</label>
                            <input type="number" name="jmlh_kehadiran" class="form-control">
                          </div>
                          <div class="col">
                            <label class="form-label">Jumlah Pertemuan</label>
                            <input type="number" name="jmlh_pertemuan" class="form-control">
                          </div>
                          <div class="col">
                            <label class="form-label">Nilai Tugas</label>
                            <input type="number" name="nilai_tugas" class="form-control">
                          </div>
                          <div class="col">
                            <label class="form-label">Nilai UTS</label>
                            <input type="number" name="nilai_uts" class="form-control">
                          </div>
                          <div class="col">
                            <label class="form-label">Nilai UAS</label>
                            <input type="number" name="nilai_uas" class="form-control">
                          </div>
                        </div>
                        <div>
                          <input type="submit" value="simpan" class="btn btn-primary mt-3">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

               <!-- table jurusan -->
               <h2 class="pt-4 text-white">List Jurusan</h2>
                <table class="table table-hover table-dark border table-bordered text-white">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Jurusan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                      <?php 
                          $qry1 = "SELECT * FROM jurusan";
                          $exec1 = mysqli_query($con, $qry1);
                          $no=1;
                          while($jurusan = mysqli_fetch_assoc($exec1)){
                      ?> 
                      <tr>
                          <td> <?= $no++ ?> </td>
                          <td> <?= $jurusan['nama_jurusan'] ?> </td>
                          <td>
                          <a href="edit-jurusan.php?id_jurusan=<?= $jurusan['id_jurusan'] ?>">
                              <button class="btn btn-warning">Edit</button>
                          </a>
                          <a href="delete-jurusan.php?id_jurusan=<?= $jurusan['id_jurusan'] ?>">
                              <button class="btn btn-danger"> Delete</button>
                          </a>
                          </td>
                      </tr> 
                      <?php } ?> 
                  </tbody>
                </table>

              <!-- table Matkul -->
              <h2 class="pt-4 text-white">List Matkul</h2>
              <table class="table table-hover table-dark border table-bordered text-white">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Matkul</th>
                    <th>Jumlah Sks</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                    <?php 
                        $qry2 = "SELECT * FROM matkul";
                        $exec2 = mysqli_query($con, $qry2);
                        $no=1;
                        while($matkul = mysqli_fetch_assoc($exec2)){
                    ?> 
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $matkul['nama_matkul'] ?> </td>
                        <td> <?= $matkul['jumlah_sks'] ?> </td>
                        <td>
                        <a href="edit-matkul.php?id_matkul=<?= $matkul['id_matkul'] ?>">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="delete-matkul.php?id_matkul=<?= $matkul['id_matkul'] ?>">
                            <button class="btn btn-danger"> Delete</button>
                        </a>
                        </td>
                    </tr> 
                    <?php } ?> 
                </tbody>
              </table>

              <!-- table mahasiswa -->
              <h2 class="pt-4 text-white">Data Mahasiswa</h2>
              <table class="table table-hover table-dark border table-bordered text-white">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mhs</th>
                    <th>Jurusan</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Act</th>
                  </tr>
                </thead>
                <tbody> 
                    <?php 
                        $qry = "SELECT * FROM mahasiswa INNER JOIN jurusan ON jurusan.id_jurusan = mahasiswa.kude_jurusan";
                        $exec = mysqli_query($con, $qry);
                        $no=1;
                        while($data = mysqli_fetch_assoc($exec)){
                    ?> 
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $data['nim'] ?> </td>
                        <td> <?= $data['nama_mhs'] ?> </td>
                        <td> <?= $data['nama_jurusan'] ?> </td>
                        <td> <?= $data['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?> </td>
                        <td> <?= $data['alamat'] ?> </td>
                        <td> <?= $data['no_hp'] ?> </td>
                        <td> <?= $data['email'] ?> </td>
                        <td>
                        <a href="edit.php?nim=<?= $data['nim'] ?>">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="delete.php?nim=<?= $data['nim'] ?>">
                            <button class="btn btn-danger"> Delete</button>
                        </a>
                        </td>
                    </tr> 
                    <?php } ?> 
                </tbody>
              </table>

              <!-- table nilai mahasiswa -->
              <h2 class="pt-4 text-white">List Nilai Mahasiswa</h2>
              <table class="table table-hover table-dark border table-bordered text-white">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Mahasiswa</th>
                    <th>Mata kuliah</th>
                    <th>Jumlah Kehadiran</th>
                    <th>Jumlah Pertemuan</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai UTS</th>
                    <th>Nilai UAS</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                    <?php 
                        $qry5 = "SELECT * FROM nilai_mahasiswa";
                        $exec5 = mysqli_query($con, $qry5);
                        $no=1;
                        while($nilai_mahasiswa = mysqli_fetch_assoc($exec5)){
                    ?> 
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $nilai_mahasiswa['nim'] ?> </td>
                        <td> <?= $nilai_mahasiswa['id_jurusan'] ?> </td>
                        <td> <?= $nilai_mahasiswa['jmlh_kehadiran'] ?> </td>
                        <td> <?= $nilai_mahasiswa['jmlh_pertemuan'] ?> </td>
                        <td> <?= $nilai_mahasiswa['nilai_tugas'] ?> </td>
                        <td> <?= $nilai_mahasiswa['nilai_uts'] ?> </td>
                        <td> <?= $nilai_mahasiswa['nilai_uas'] ?> </td>
                        <td>
                        <a href="edit-nilaimhs.php?id_nilai_mahasiswa=<?= $nilai_mahasiswa['id_nilai_mahasiswa'] ?>">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="delete-nilaimhs.php?id_nilai_mahasiswa=<?= $nilai_mahasiswa['id_nilai_mahasiswa'] ?>">
                            <button class="btn btn-danger"> Delete</button>
                        </a>
                        </td>
                    </tr> 
                    <?php } ?> 
                </tbody>
              </table>
            </div>
          </div>
    </section>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>