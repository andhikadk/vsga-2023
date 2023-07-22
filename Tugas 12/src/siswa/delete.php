<?php

include '../config.php';

$id = $_GET['id'];

$query = "DELETE FROM calon_siswa WHERE id = '$id'";
$result = mysqli_query($db, $query);

if ($result) {
  header('Location: index.php');
} else {
  echo "Gagal menghapus";
}
