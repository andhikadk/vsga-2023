<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siswa Pendaftar</title>
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
            <a class="btn btn-primary my-4 float-end" href="add.php">
              Tambah Data
            </a>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../config.php';
                $query = "SELECT * FROM calon_siswa ORDER BY id DESC";
                $result = mysqli_query($db, $query);

                $list_siswa = mysqli_fetch_all($result, MYSQLI_ASSOC);

                $no = 1;

                foreach ($list_siswa as $siswa) {
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $siswa["nama"] ?></td>
                    <td><?php echo $siswa["alamat"] ?></td>
                    <td><?php echo $siswa["jenis_kelamin"] ?></td>
                    <td><?php echo $siswa["tgl_lahir"] ?></td>
                    <td>
                      <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $siswa['id'] ?>">Edit</a>
                      <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $siswa['id'] ?>">Hapus</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>