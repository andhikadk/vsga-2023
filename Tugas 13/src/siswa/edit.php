<?php
include '../config.php';

$error = "";
$sukses = "";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM calon_siswa WHERE id = '$id'");
$row = mysqli_fetch_array($data);

// jika tombol submit diklik
if (isset($_POST['submit'])) {
  $nama = $db->real_escape_string($_POST['nama']);
  $alamat = $db->real_escape_string($_POST['alamat']);
  $jenis_kelamin = $db->real_escape_string($_POST['jenis_kelamin']);
  $tgl_lahir = $db->real_escape_string($_POST['tgl_lahir']);

  // update data ke database
  $query = "UPDATE calon_siswa SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', tgl_lahir = '$tgl_lahir' WHERE id = '$id'";

  $result = mysqli_query($db, $query);
  echo $result;
  if ($result) {
    $sukses = "Update berhasil";;
  } else {
    $error = "Update gagal";
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
              <h5 class="card-title">Edit Data Siswa</h5>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required autofocus>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" required>
                  <option value="<?php echo $row['jenis_kelamin']; ?>" hidden>
                    <?php echo $row['jenis_kelamin']; ?>
                  </option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>" required>
              </div>
              <a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
              <button type="submit" class="btn btn-primary mt-2 float-end" name="submit">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>