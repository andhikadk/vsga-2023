<?php
include '../config.php';

$error = "";
$sukses = "";

if (isset($_POST['submit'])) {
  $nama = $db->real_escape_string($_POST['nama']);
  $alamat = $db->real_escape_string($_POST['alamat']);
  $jenis_kelamin = $db->real_escape_string($_POST['jenis_kelamin']);
  $tgl_lahir = $db->real_escape_string($_POST['tgl_lahir']);

  $query = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, tgl_lahir) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$tgl_lahir')";

  $result = mysqli_query($db, $query);
  echo $result;
  if ($result) {
    $sukses = "Pendaftaran berhasil";;
  } else {
    $error = "Pendaftaran gagal";
  }
}; ?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Pendaftaran Siswa Baru | SMK Suhat
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-5" style="max-width: 1000px; margin: auto;">
          <div class="card-header text-center">
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK Suhat</h1>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <?php
              if ($error) {
              ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
                  <a href="" class="btn-close float-end"></a>
                </div>
              <?php
              };
              if ($sukses) {
              ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $sukses; ?>
                  <a href="" class="btn-close float-end"></a>
                </div>
              <?php
              }; ?>
              <h5 class="card-title">Isikan Data Lengkap</h5>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" required autofocus>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" required>
                  <option disabled selected hidden value="">-- Pilih Jenis Kelamin --</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
              </div>
              <a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
              <button type="submit" class="btn btn-primary mt-2 float-end" name="submit">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>